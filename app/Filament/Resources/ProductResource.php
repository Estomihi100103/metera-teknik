<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Forms\Components\RichEditor;
use App\Filament\Resources\ProductResource\Widgets\ProductsChart;
use Filament\Notifications\Notification;
use Filament\Forms\Components\MarkdownEditor;





class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-c-squares-2x2';

    protected static ?string $navigationGroup = 'Shop';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make([
                    Forms\Components\TextInput::make('title')
                        ->label('Judul')
                        ->required()->required()->unique(ignorable: fn ($record) => $record),
                    Forms\Components\TextInput::make('slug')
                        ->label('Slug')
                        ->required()->unique(ignorable: fn ($record) => $record),
                    Forms\Components\TextInput::make('product_name')
                        ->label('Nama Lengkap Produk'),
                    Forms\Components\Select::make('category_id')
                        ->label('Category Produk')
                        ->options(
                            \App\Models\Category::all()->pluck('name', 'id')->toArray()
                        )
                        ->required(),
                    Forms\Components\Select::make('brand_id')
                        ->label('Brand')
                        ->options(
                            \App\Models\Brand::all()->pluck('name', 'id')->toArray()
                        ),
                    Forms\Components\FileUpload::make('image')
                        ->label('Image'),
                        RichEditor::make('deskripsi'),
                        RichEditor::make('spesipikasi'),
                    //meta_title
                    Forms\Components\TextInput::make('meta_title')
                        ->label('Meta Title'),
                    //meta_description
                    Forms\Components\TextInput::make('meta_description')
                        ->label('Meta Description'),
                    //meta_keywords
                    Forms\Components\TextInput::make('meta_keywords')
                        ->label('Meta Keywords'),

                    //additional_images
                    Forms\Components\FileUpload::make('additional_images')
                        ->label('Additional Images'),
                    Forms\Components\FileUpload::make('video')
                        ->label('Video'),

                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->label('ID')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('product_name')
                    ->label('Nama Produk')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('category.name')
                    ->label('Category')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('brand.name')
                    ->label('Brand')
                    ->sortable()
                    ->searchable(),
            ])
            ->filters(
                [
                    Filter::make('category_id')
                        ->label('Category'),
                    //filter brand
                    Filter::make('brand_id')
                        ->label('Brand'),
                ],

            )
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),

                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
