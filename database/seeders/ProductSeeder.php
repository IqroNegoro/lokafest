<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::insert([
        [
            'user_id' => 1,
            'name' => 'Bespoke Handmade Shoes',
            'slug' => Str::slug('Bespoke Handmade Shoes'),
            'category_id' => 1,
            'sub' => 'The latest sports shoes with advanced technology.',
            'story' => '<p>These handmade shoes are crafted with great care and attention to detail. Perfect for those who appreciate unique and high-quality footwear.</p>',
            'image' => 'https://hnscraftsmanship.com/wp-content/uploads/2024/07/hnswebp2-1024x683.webp',
            'likes' => 58234,
            'total_likes' => 41230,
            'link' => 'https://hnscraftsmanship.com/bespoke-handmade-shoes/',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'user_id' => 2,
            'name' => 'Handmade Wooden Photo Frame',
            'slug' => Str::slug('Handmade Wooden Photo Frame'),
            'category_id' => 24,
            'sub' => 'Handmade wooden photo frame with creative design and natural color.',
            'story' => '<p>This photo frame is handmade with a creative touch and natural color, perfect to beautify your room and keep your special moments, 💖✨</p>',
            'image' => 'https://image.made-in-china.com/202f0j00GigzWkysAoum/High-Quality-of-Handmade-Frame-Creative-Design-Natural-Color.webp',
            'likes' => 15000,
            'total_likes' => 12000,
            'link' => '',
            'created_at' => now()->subDay(),
            'updated_at' => now()->subDay(),
        ],
        [
            'user_id' => 3,
            'name' => 'Gucci Leather Bag',
            'slug' => Str::slug('Gucci Leather Bag'),
            'category_id' => 3,
            'sub' => 'Elegant leather bag for your daily needs.',
            'story' => '<p>This Gucci Leather Bag is crafted from premium leather, perfect for both formal and casual occasions.</p>',
            'image' => 'https://down-id.img.susercontent.com/file/e795c15ac24860dede30db3dab4633b0',
            'likes' => 96328,
            'total_likes' => 87354,
            'link' => 'https://www.gucci.com/us/en/pr/women/handbags/womens-shoulder-bags/gg-marmont-small-shoulder-bag-p-443497DTDIT1000',
            'created_at' => now()->subDay(),
            'updated_at' => now()->subDay(),
        ],
        [
            'user_id' => 2,
            'name' => 'Kangaroo Solidwood Cane Chair',
            'slug' => Str::slug('Kangaroo Solidwood Cane Chair'),
            'category_id' => 20,
            'sub' => 'Elegant solidwood cane chair for stylish and comfortable seating.',
            'story' => '<p>The Kangaroo Solidwood Cane Chair is crafted with premium solid wood and natural cane, offering both durability and a timeless design. Perfect for adding a touch of sophistication to your living space, 🪑✨</p>',
            'image' => 'https://woodworm.in/cdn/shop/products/image_655060b1-3d53-4bd4-a564-4a96f3f0cfc7.jpg?v=1703343167',
            'likes' => 23456,
            'total_likes' => 12345,
            'link' => 'https://woodworm.in/products/buy-woodworm-kangaroo-solidwood-rattan-chair?srsltid=AfmBOoonToIp934Xfh7SMCeoDphPEf-tfQOgA_t8YRrJgRAnmdiK_94R',
            'created_at' => now()->subDay(),
            'updated_at' => now()->subDay(),
        ],
        [
            'user_id' => 2,
            'name' => 'Rustic Farmhouse Dining Table',
            'slug' => Str::slug('Rustic Farmhouse Dining Table'),
            'category_id' => 20,
            'sub' => 'Handmade reclaimed wood dining table with benches, rustic oak finish.',
            'story' => '<p>Meja makan farmhouse rustic ini dibuat dengan tangan dari kayu daur ulang berkualitas, menampilkan desain klasik dengan sentuhan modern. Cocok banget untuk dapur atau ruang makan keluarga, Ukuran 270cm, lengkap dengan 2 bangku, memberikan nuansa hangat dan alami di rumahmu~ 🍽️✨</p>',
            'image' => 'https://clarfurniture.co.uk/wp-content/uploads/2023/08/rustic-farmhouse-dining-table.-reclaimed-wood-handmade-kitchen-table-x-wooden-base-dimensions-270cm-table-2-benches-primary-colour-rustic-oak-2-20712-p.jpg',
            'likes' => 2450,
            'total_likes' => 3200,
            'link' => 'https://clarfurniture.co.uk/product/rustic-farmhouse-dining-table-reclaimed-wood-handmade-kitchen-table-x-wooden-base/',
            'created_at' => now()->subWeek(),
            'updated_at' => now()->subWeek(),
        ],
        [
            'user_id' => 1,
            'name' => 'Juho 1 Knife Limited Edition Handmade Finnish Knife',
            'slug' => Str::slug('Juho 1 Knife Limited Edition Handmade Finnish Knife'),
            'category_id' => 26,
            'sub' => 'Limited edition handmade outdoor knife from Finland, crafted with precision and natural beauty.',
            'story' => '<p>The Juho 1 Knife is a limited edition handmade knife from Roselli Finland, featuring a beautiful birch wood handle and high-quality steel blade. Perfect for collectors and outdoor enthusiasts, This knife comes with an elegant leather sheath, ready to accompany your adventures in the wild~ 🔪✨</p>',
            'image' => 'https://eu.roselli.fi/cdn/shop/files/RoselliJ1Outdoorknife5.jpg?v=1697116580&width=1445',
            'likes' => 1200,
            'total_likes' => 950,
            'link' => 'https://eu.roselli.fi/products/juho-1',
            'created_at' => now()->subWeek(),
            'updated_at' => now()->subWeek(),
        ],
        [
            'user_id' => 3,
            'name' => 'Atomic Habits Book',
            'slug' => Str::slug('Atomic Habits Book'),
            'category_id' => 7,
            'sub' => 'A best-selling book on building good habits.',
            'story' => '<p>Atomic Habits by James Clear provides practical strategies to form good habits, break bad ones, and master the tiny behaviors that lead to remarkable results.</p>',
            'image' => 'https://images-na.ssl-images-amazon.com/images/I/91bYsX41DVL.jpg',
            'likes' => 87654,
            'total_likes' => 76543,
            'link' => 'https://jamesclear.com/atomic-habits',
            'created_at' => now()->subWeek(),
            'updated_at' => now()->subWeek(),
        ],
        [
            'user_id' => 3,
            'name' => 'White Shirt',
            'slug' => Str::slug('White Shirt'),
            'category_id' => 2,
            'sub' => 'Just Normal White Shirt',
            'story' => '<p>Yeah normal white shirt</p>',
            'image' => 'https://www.houseofblanks.com/cdn/shop/files/HeavyweightTshirt_White_01_2.jpg?v=1726516822&width=1445',
            'likes' => 5012,
            'total_likes' => 4932,
            'link' => 'https://www.houseofblanks.com/products/heavyweight-t-shirt-white?srsltid=AfmBOoqQAIuhrVBDMBUrgHWU3H2Qx9fknUPgtlYtmj6FFws9-mpTG0lF',
            'created_at' => now()->subMonth(),
            'updated_at' => now()->subMonth(),
        ],
        [
            'user_id' => 2,
            'name' => 'Handmade Willow Basket',
            'slug' => Str::slug('Handmade Willow Basket'),
            'category_id' => 20,
            'sub' => 'Beautiful handwoven willow basket, perfect for picnics, shopping, or home decor,',
            'story' => '<p>This Handmade Willow Basket is crafted with traditional weaving techniques, giving it a natural and rustic charm, It\'s perfect for carrying fruits, bread, or as a lovely decoration in your home, it would be so much fun! 🧺💕</p>',
            'image' => 'https://i.etsystatic.com/24933868/r/il/bda5d7/3692149625/il_570xN.3692149625_n72t.jpg',
            'likes' => 2345,
            'total_likes' => 2000,
            'link' => 'https://www.etsy.com/listing/1158716794/handmade-willow-basket-woven-wicker',
            'created_at' => now()->subMonth(),
            'updated_at' => now()->subMonth(),
        ],
        [
            'user_id' => 2,
            'name' => 'Handmade Ceramic Plate by Osoka Ar',
            'slug' => Str::slug('Handmade Ceramic Plate by Osoka Ar'),
            'category_id' => 26,
            'sub' => 'Handmade ceramic dinner plate with beautiful herb motif, perfect for special dining,',
            'story' => '<p>This handmade ceramic plate by Osoka Ar Ceramics features a unique and lovely herb design, crafted with care and attention to detail. It\'s perfect for elevating your dining table or as a special gift for someone you love. Imagine sharing a meal with your cute, it would be so sweet~ 🍽️✨</p>',
            'image' => 'https://i.etsystatic.com/27431999/r/il/988774/2834485736/il_fullxfull.2834485736_gblo.jpg',
            'likes' => 3210,
            'total_likes' => 3000,
            'link' => 'https://www.etsy.com/listing/953153551/handmade-ceramic-plates-by-osoka-ar',
            'created_at' => now()->subMonth(),
            'updated_at' => now()->subMonth(),
        ],
        ]);
    }
}
