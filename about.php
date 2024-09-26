<?php include 'header.php'; ?>

    <div class="container mx-auto px-4 py-8">
        <div class="flex flex-col md:flex-row items-center justify-between mb-12">
            <div class="md:w-1/2 mb-8 md:mb-0">
                <h1 class="text-4xl font-bold mb-4">We're a passionate group of people working from around the world to build the future of ecommerce.</h1>
                <p class="text-gray-300">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua. Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo.</p>
            </div>
            <div class="md:w-1/2">
                <img src="pict/pictures.jpg" alt="Our Team" class="rounded-lg shadow-lg">
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
            <?php
            $milestones = [
                ['date' => 'Aug 2021', 'title' => 'Founded company', 'description' => 'Nihil aut nam. Dignissimos a pariatur et quos omnis. Aspernatur asperiores et dolorem dolorem optio voluptate repudiandae.'],
                ['date' => 'Dec 2021', 'title' => 'Secured $65m in funding', 'description' => 'Provident quia ut esse. Vero vel eos repudiandae aspernatur. Cumque minima impedit sapiente a architecto nihil.'],
                ['date' => 'Feb 2022', 'title' => 'Released beta', 'description' => 'Sunt perspiciatis incidunt. Non necessitatibus aliquid. Consequatur ut officiis earum eum quia facilis. Hic deleniti dolorem quia et.'],
                ['date' => 'Dec 2022', 'title' => 'Global launch of product', 'description' => 'Ut ipsa sint distinctio quod itaque nam qui. Possimus aut unde id architecto voluptatem hic aut pariatur velit.']
            ];

            foreach ($milestones as $milestone) {
                echo "<div class='bg-gray-800 p-6 rounded-lg shadow-md'>";
                echo "<h3 class='text-primary-400 font-semibold mb-2'>{$milestone['date']}</h3>";
                echo "<h4 class='text-xl font-bold mb-2'>{$milestone['title']}</h4>";
                echo "<p class='text-gray-400'>{$milestone['description']}</p>";
                echo "</div>";
            }
            ?>
        </div>

        <div class="mb-12">
            <h2 class="text-3xl font-bold mb-8 text-center">Our Team</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php
                $team_members = [
                    ['name' => 'Gojo Satoru', 'position' => 'Honored One', 'image' => 'pict/gojo.jpg'],
                    ['name' => 'Shouko Eiri', 'position' => 'Alchemist', 'image' => 'pict/eiri.jpg'],
                    ['name' => 'Suguru Geto', 'position' => 'Greatest Sorcerer', 'image' => 'pict/geto.jpg']
                ];

                foreach ($team_members as $member) {
                    echo "<div class='bg-gray-800 p-6 rounded-lg shadow-md text-center'>";
                    echo "<img src='{$member['image']}' alt='{$member['name']}' class='w-32 h-32 rounded-full mx-auto mb-4'>";
                    echo "<h3 class='text-xl font-bold mb-2'>{$member['name']}</h3>";
                    echo "<p class='text-primary-400'>{$member['position']}</p>";
                    echo "</div>";
                }
                ?>
            </div>
        </div>
    </div>
</body>
<?php include 'footer.php'; ?>
</html>