<?php include 'header.php'; ?>

<div class="min-h-screen bg-gray-900 text-white py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <div class="text-center">
            <h2 class="text-3xl font-extrabold sm:text-4xl">
                Pricing plans for teams of all sizes
            </h2>
            <p class="mt-3 max-w-2xl mx-auto text-xl text-gray-300 sm:mt-4">
                Distinctio et nulla eum soluta et neque labore quibusdam. Saepe et quasi iusto modi velit ut non voluptas in. Explicabo id ut laborum.
            </p>
        </div>

        <div class="mt-12 space-y-4 sm:mt-16 sm:space-y-0 sm:grid sm:grid-cols-3 sm:gap-6 lg:max-w-4xl lg:mx-auto xl:max-w-none xl:mx-0 xl:grid-cols-3">
            <?php
            $plans = [
                [
                    'title' => 'Freelancer',
                    'price' => 24,
                    'features' => [
                        '5 products',
                        'Up to 1,000 subscribers',
                        'Basic analytics',
                        '48-hour support response time',
                        'Marketing automations'
                    ],
                    'popular' => false
                ],
                [
                    'title' => 'Startup',
                    'price' => 32,
                    'features' => [
                        '25 products',
                        'Up to 10,000 subscribers',
                        'Advanced analytics',
                        '24-hour support response time',
                        'Marketing automations'
                    ],
                    'popular' => false
                ],
                [
                    'title' => 'Enterprise',
                    'price' => 48,
                    'features' => [
                        'Unlimited products',
                        'Unlimited subscribers',
                        'Advanced analytics',
                        '1-hour, dedicated support response time',
                        'Marketing automations'
                    ],
                    'popular' => false
                ]
            ];

            foreach ($plans as $plan): ?>
                <div class="pricing-card bg-gray-800 p-6 rounded-lg shadow-lg transition-all duration-300 ease-in-out transform hover:scale-105 hover:border-indigo-500 <?php echo $plan['popular'] ? 'border-2 border-indigo-500' : 'border-2 border-transparent'; ?>">
                    <div class="pricing-card-content">
                        <h3 class="text-xl font-semibold text-white mb-2"><?php echo $plan['title']; ?></h3>
                        <p class="text-3xl font-bold text-white mb-4">$<?php echo $plan['price']; ?><span class="text-sm font-normal">/month</span></p>
                        <ul class="text-gray-300 mb-6">
                            <?php foreach ($plan['features'] as $feature): ?>
                                <li class="flex items-center mb-2">
                                    <svg class="w-4 h-4 mr-2 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <?php echo $feature; ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="pricing-card-footer">
                        <a href="404page.php?plan=<?php echo $plan['title']; ?>">
                            <button class="w-full py-2 px-4 rounded <?php echo $plan['popular'] ? 'bg-indigo-600 hover:bg-blue-700' : 'bg-gray-700 hover:bg-blue-600'; ?> text-white font-semibold transition-colors duration-300">
                                Buy plan
                            </button>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>