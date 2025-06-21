<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SettingResource\Pages;
use App\Models\Setting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class SettingResource extends Resource
{
    protected static ?string $model = Setting::class;

    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static ?string $navigationGroup = 'System';

    protected static ?int $navigationSort = 100;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('group')
                    ->options([
                        'general' => 'General',
                        'contact' => 'Contact Information',
                        'social' => 'Social Media',
                        'seo' => 'SEO',
                        'appearance' => 'Appearance',
                    ])
                    ->required(),
                Forms\Components\TextInput::make('key')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->helperText('Unique identifier for this setting')
                    ->rules(['alpha_dash']),
                Forms\Components\TextInput::make('label')
                    ->required()
                    ->helperText('Human readable label for this setting'),
                Forms\Components\Select::make('type')
                    ->options([
                        'text' => 'Text',
                        'textarea' => 'Text Area',
                        'rich_text' => 'Rich Text',
                        'number' => 'Number',
                        'boolean' => 'Yes/No',
                        'date' => 'Date',
                        'time' => 'Time',
                        'image' => 'Image',
                        'color' => 'Color',
                    ])
                    ->required()
                    ->reactive(),
                Forms\Components\Group::make()
                    ->schema(function (Forms\Get $get) {
                        $type = $get('type');
                        
                        return match($type) {
                            'textarea' => [
                                Forms\Components\Textarea::make('value'),
                            ],
                            'rich_text' => [
                                Forms\Components\RichEditor::make('value'),
                            ],
                            'number' => [
                                Forms\Components\TextInput::make('value')
                                    ->numeric(),
                            ],
                            'boolean' => [
                                Forms\Components\Toggle::make('value'),
                            ],
                            'date' => [
                                Forms\Components\DatePicker::make('value'),
                            ],
                            'time' => [
                                Forms\Components\TimePicker::make('value'),
                            ],
                            'image' => [
                                Forms\Components\FileUpload::make('value')
                                    ->image()
                                    ->directory('settings'),
                            ],
                            'color' => [
                                Forms\Components\ColorPicker::make('value'),
                            ],
                            default => [
                                Forms\Components\TextInput::make('value'),
                            ],
                        };
                    }),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('group')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('key')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('label')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('value')
                    ->limit(50)
                    ->searchable(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('group')
                    ->options([
                        'general' => 'General',
                        'contact' => 'Contact Information',
                        'social' => 'Social Media',
                        'seo' => 'SEO',
                        'appearance' => 'Appearance',
                    ]),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSettings::route('/'),
            'create' => Pages\CreateSetting::route('/create'),
            'edit' => Pages\EditSetting::route('/{record}/edit'),
        ];
    }
}