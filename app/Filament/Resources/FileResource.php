<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FileResource\Pages;
use App\Filament\Resources\FileResource\RelationManagers;
use App\Models\File;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Notifications\Notification;
use Filament\Tables\Filters\Filter;


class FileResource extends Resource
{
    protected static ?string $model = File::class;

    protected static ?string $navigationIcon = 'heroicon-o-circle-stack';
    protected static ?string $navigationGroup = 'Resource Management';
    protected static ?string $recordTitleAttribute = 'name';
    protected static ?string $navigationLabel = 'Templates';

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function getNavigationBadgeColor(): string|array|null
    {
        return static::getModel()::count() < 10 ? 'warning' : 'success';
    }


    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            TextInput::make('name')
                ->required()
                ->maxLength(255),
            FileUpload::make('image')
                ->image()
                ->directory('products/images')
                ->required(),
            FileUpload::make('pdf')
                ->image()
                ->directory('documents/files')
                ->acceptedFileTypes(['application/pdf']) // Restrict to PDFs
                ->preserveFilenames() // Preserve the original filename
                ->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('name'),
            Tables\Columns\ImageColumn::make('image')
                  ->disk('public') // Specify the disk if necessary
                  ->url(fn($record) => url('storage/'.$record->image)),
            Tables\Columns\ImageColumn::make('pdf')
                  ->disk('public') // Specify the disk if necessary
                  ->url(fn($record) => url('storage/'.$record->pdf)),        
        ])
        ->filters([
            Filter::make('is_featured')
                 ->toggle()
        ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
                      ->successNotification(
                        Notification::make()
                           ->success()
                           ->title('Product Deleted.')
                           ->body('Product has been deleted successfully.')
                      )
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
            'index' => Pages\ListFiles::route('/'),
            'create' => Pages\CreateFile::route('/create'),
            'edit' => Pages\EditFile::route('/{record}/edit'),
        ];
    }
}
