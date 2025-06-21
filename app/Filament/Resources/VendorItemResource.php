<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VendorItemResource\Pages;
use App\Filament\Resources\VendorItemResource\RelationManagers;
use App\Models\VendorItem;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VendorItemResource extends Resource
{
    protected static ?string $model = VendorItem::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('vendor_id')
                    ->label('Vendor')
                    ->relationship('vendor', 'name')
                    ->required()
                    ->columnSpanFull(),

                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('price')
                    ->label('Price')
                    ->numeric()
                    ->required()
                    ->prefix('Rp '),

                Forms\Components\RichEditor::make('description')
                    ->required()
                    ->columnSpanFull(),

                Forms\Components\FileUpload::make('images')
                    ->multiple()
                    ->image()
                    ->directory('vendor-items')
                    ->preserveFilenames()
                    ->required()
                    ->columnSpanFull(),

                Forms\Components\Toggle::make('is_active')
                    ->label('Active')
                    ->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('vendor.name')->label('Vendor')->sortable()->searchable(),

                Tables\Columns\TextColumn::make('name')->sortable()->searchable(),

                Tables\Columns\TextColumn::make('price')
                    ->money('idr', true)
                    ->sortable(),

                Tables\Columns\IconColumn::make('is_active')
                    ->boolean()
                    ->label('Active'),

                Tables\Columns\ImageColumn::make('images')
                    ->label('Images')
                    ->getStateUsing(function ($record) {
                        // Tampilkan gambar pertama saja di tabel
                        $images = $record->images;
                        return $images[0] ?? null;
                    })
                    ->circular()
                    ->defaultImageUrl(url('assets/notfound.svg')),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }


    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListVendorItems::route('/'),
            'create' => Pages\CreateVendorItem::route('/create'),
            'edit' => Pages\EditVendorItem::route('/{record}/edit'),
        ];
    }
}
