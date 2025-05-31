<?php

namespace App\Enums;

use Filament\Support\Contracts\HasDescription;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;

enum VendorType: string implements HasLabel, HasDescription, HasIcon
{
    case Venue = 'Venue';
    case Catering = 'Catering';
    case MasterOfCeremony = 'Master of Ceremony';
    case Decoration = 'Decoration';
    case Photographer = 'Photographer';
    case Music = 'Music';
    case Videographer = 'Videographer';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::Venue => 'Venue',
            self::Catering => 'Catering',
            self::MasterOfCeremony => 'Master of Ceremony',
            self::Decoration => 'Decoration',
            self::Photographer => 'Photographer',
            self::Music => 'Music',
            self::Videographer => 'Videographer',
        };
    }

    public function getDescription(): ?string
    {
        return match ($this) {
            self::Venue => 'Tempat berlangsungnya acara, seperti gedung, ballroom, atau area outdoor.',
            self::Catering => 'Penyedia makanan dan minuman untuk tamu selama acara berlangsung.',
            self::MasterOfCeremony => 'Pembawa acara yang mengatur alur acara agar berjalan lancar dan menarik.',
            self::Decoration => 'Pihak yang bertanggung jawab atas estetika dan tata dekorasi tempat acara.',
            self::Photographer => 'Fotografer profesional untuk mengabadikan momen-momen penting selama acara.',
            self::Music => 'Pengisi hiburan musik, seperti band, penyanyi, atau DJ untuk suasana acara.',
            self::Videographer => 'Perekam video acara yang mengabadikan momen dalam bentuk dokumentasi visual.',
        };
    }

    public function getIcon(): ?string
    {
        return match ($this) {
            self::Venue => 'heroicon-o-building-office',
            self::Catering => 'heroicon-o-cake',
            self::MasterOfCeremony => 'heroicon-o-microphone',
            self::Decoration => 'heroicon-o-sparkles',
            self::Photographer => 'heroicon-o-camera',
            self::Music => 'heroicon-o-musical-note',
            self::Videographer => 'heroicon-o-video-camera',
        };
    }
}
