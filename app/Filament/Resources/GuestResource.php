<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GuestResource\Pages;
use App\Filament\Resources\GuestResource\RelationManagers;
use App\Models\Guest;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GuestResource extends Resource
{
    protected static ?string $model = Guest::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('username')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('institute')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('phone')
                    ->maxLength(255)
                    ->default(null),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('username')
                    ->searchable(),
                Tables\Columns\TextColumn::make('institute')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Action::make('kirim_whatsapp')
                    ->label('Kirim WA')
                    ->icon('heroicon-o-paper-airplane')
                    ->url(fn(Guest $record): string => 'https://wa.me/' . $record->phone . '?text=' . urlencode(str_replace('✨ [Nama Tamu] ✨', '✨ ' . $record->name . ' ✨', "📢 [Wedding Invitation]\n\n📝 *Kepada Yth.*\n✨ [Nama Tamu] ✨\n\nSetelah melalui berbagai *debug* dalam perjalanan hidup, akhirnya kami menemukan *partner sejati*. Kini saatnya melakukan *final commit* dan *merge dua hati* dalam satu repository bernama *pernikahan*.\n\n📖 \"Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan pasangan-pasangan untukmu dari jenismu sendiri, agar kamu cenderung dan merasa tenteram kepadanya, dan Dia menjadikan di antaramu rasa kasih dan sayang. Sungguh, pada yang demikian itu benar-benar terdapat tanda-tanda (kebesaran Allah) bagi kaum yang berpikir.\" \n🕌 *(QS. Ar-Rum: 21)*\n\nSeperti *Luffy yang mengumpulkan kru terbaik*, kami telah menemukan satu sama lain untuk menghadapi petualangan besar di masa depan. Layaknya *Tony Stark & Pepper Potts* yang akhirnya bersatu, atau *Peter Parker* yang berjuang demi *Mary Jane*, kami percaya bahwa *meskipun banyak rintangan, cinta sejati akan selalu menemukan jalannya*.\n\nLebih dari itu, ini bukan sekadar penyatuan dua hati, tapi juga awal dari *perjalanan besar menuju kebangkitan baru*—melangkah bersama dengan semangat yang lebih kuat, seperti *pahlawan yang bangkit menghadapi tantangan demi masa depan yang lebih baik*. Dan seperti kebangkitan para pahlawan di medan pertempuran, inilah *awal kebangkitan baru bagi kami*, sebuah perjalanan yang dimulai *bertepatan dengan Hari Kebangkitan Nasional*.\n\n\n🧭 *Set Your Log Pose To:*\n🌐 *https://qobiltu.bakaranproject.com/$record->username*\n\n📌 *Mark Your Calendar!*\n🕌 *Akad Nikah*\n📆 *Selasa, 20 Mei 2025*\n⏰ *08.00 WIB - Selesai*\n\n🎉 *Tasyakuran*\n📆 *Selasa - Kamis, 20 - 22 Mei 2025*\n⏰ *10.00 WIB - Selesai*\n\nSaatnya melakukan *deploy ke production*, bukan sekadar *testing* lagi. Layarkan kapal menuju *pulau kebahagiaan*, hadapi petualangan baru tanpa takut badai menghadang. Ini bukan sekadar *origin story*, tapi awal dari *saga terbesar dalam hidup kami*!\n\n🚨 *Jangan sampai...*\n❌ *Tersesat di Grand Line!* 🏝️\n❌ *Kena Timeout!* ⏳\n❌ *404 Not Found!* 📱\n❌ *Terkena Snap Thanos!* 🫥\n🙏 *Semoga tidak ada halangan, sehingga kalian bisa hadir di hari spesial kami!* ✨❤️\n\nKami nantikan kehadiran serta doa restu dari kalian semua.\n\n💻 *Yoga Willy Utomo & Dhian Nur Aini* ☠️❤️🦸‍♂️")))
                    ->openUrlInNewTab(),
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
            'index' => Pages\ListGuests::route('/'),
            'create' => Pages\CreateGuest::route('/create'),
            'edit' => Pages\EditGuest::route('/{record}/edit'),
        ];
    }
}
