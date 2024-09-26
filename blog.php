<?php include 'header.php'; ?>

<div class="container mx-auto px-4 py-8">
    <h1 class="text-4xl font-bold mb-4 text-center">From the blog</h1>
    <p class="text-xl text-gray-400 mb-8 text-center">Learn how to grow your business with our expert advice.</p>

    <!-- Center the blog posts and limit the width -->
    <div class="max-w-3xl mx-auto space-y-12"> <!-- Added max-w-3xl to limit width -->
        <?php
        $blog_posts = [
            [
                'image' => 'pict/umbrella.jpg',
                'date' => 'Mar 16, 2020',
                'category' => 'Marketing',
                'title' => 'Boost your conversion rate',
                'excerpt' => 'Illo sint voluptas. Error voluptates culpa eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus unde. Sed exercitationem placeat consectetur nulla deserunt vel iusto corrupti dicta laboris incididunt.',
                'author' => [
                    'name' => 'Yukari Sakuragi',
                    'position' => 'Sales Payung',
                    'avatar' => 'pict/yukari.jpg'
                ]
            ],
            [
                'image' => 'pict/revealtitan.png',
                'date' => 'Mar 10, 2020',
                'category' => 'Sales',
                'title' => 'How to use search engine optimization to drive sales',
                'excerpt' => 'Optio sit exercitation et ex ullamco aliquid explicabo. Dolore do ut officia anim non ad eu. Magna laboris incididunt commodo elit ipsum.',
                'author' => [
                    'name' => 'Eren Yeagah',
                    'position' => 'Attack Titan',
                    'avatar' => 'pict/eren.jpg'
                ]
            ],
            [
                'image' => 'pict/kessokuband.jpg',
                'date' => 'Feb 12, 2020',
                'category' => 'Business',
                'title' => 'Improve your customer experience',
                'excerpt' => 'Dolore commodo in nulla do nulla esse consectetur. Adipisicing voluptate velit sint adipisicing ex duis elit deserunt sint ipsum. Culpa in exercitation magna adipisicing id reprehenderit consectetur culpa eu ullam.',
                'author' => [
                    'name' => 'Mr Pudidi',
                    'position' => 'Duta Nyasar',
                    'avatar' => 'pict/mrpudidi.jpeg'
                ]
            ]
        ];

        foreach ($blog_posts as $post) {
            echo '<div class="flex flex-col md:flex-row bg-gray-800 rounded-lg overflow-hidden">';
            echo '<div class="md:w-2/5">';
            echo '<img src="' . $post['image'] . '" alt="' . $post['title'] . '" class="w-full h-full object-cover">';
            echo '</div>';
            echo '<div class="md:w-3/5 p-6">';
            echo '<div class="flex items-center text-sm text-gray-400 mb-2">';
            echo '<span>' . $post['date'] . '</span>';
            echo '<span class="mx-2">•</span>';
            echo '<span>' . $post['category'] . '</span>';
            echo '</div>';
            echo '<h2 class="text-2xl font-bold mb-3">' . $post['title'] . '</h2>';
            echo '<p class="text-gray-300 mb-4">' . $post['excerpt'] . '</p>';
            echo '<div class="flex items-center">';
            echo '<img src="' . $post['author']['avatar'] . '" alt="' . $post['author']['name'] . '" class="w-10 h-10 rounded-full mr-4">';
            echo '<div>';
            echo '<p class="font-semibold">' . $post['author']['name'] . '</p>';
            echo '<p class="text-sm text-gray-400">' . $post['author']['position'] . '</p>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
        ?>
    </div>
</div>

<?php include 'footer.php'; ?>
