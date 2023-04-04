<div class="bg-white shadow my-2">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-2">
        <div class="md:grid md:grid-cols-3 lg:grid-cols-4 md:gap-6 text-center">
            <div class="md:col-span-1 flex flex-col p-4">
                <h3 class="text-2xl p-4">
                    Total Orders
                </h3>
                <a href="<?php echo e(route('admin.orders')); ?>">
                    <h2 class="text-5xl font-bold bg-blue-300  py-5">
                        <?php echo e(count($orders)); ?>

                    </h2>
                </a>
            </div>
            <div class="md:col-span-1 flex flex-col p-4">
                <h3 class="text-2xl p-4">
                    Order Amount
                </h3>
                <a href="<?php echo e(route('admin.orders')); ?>">
                    <h2 class="text-5xl font-bold bg-blue-300  py-5">
                        <?php echo e($total_orders_amounts); ?>

                    </h2>
                </a>
            </div>
            <div class="md:col-span-1 flex flex-col p-4">
                <h3 class="text-2xl p-4">
                    Total categories
                </h3>
                <a href="<?php echo e(route('admin.categories')); ?>">
                    <h2 class="text-5xl font-bold bg-blue-300  py-5">
                        <?php echo e($categories); ?>

                    </h2>
                </a>
            </div>
            <div class="md:col-span-1 flex flex-col p-4">
                <h3 class="text-2xl p-4">
                    Total stores
                </h3>
                <a href="<?php echo e(route('admin.stores')); ?>">
                    <h2 class="text-5xl font-bold bg-blue-300  py-5">
                        <?php echo e($stores); ?>

                    </h2>
                </a>
            </div>
            <div class="md:col-span-1 flex flex-col p-4">
                <h3 class="text-2xl p-4">
                    Total Products
                </h3>
                <a href="<?php echo e(route('admin.products')); ?>">
                    <h2 class="text-5xl font-bold bg-blue-300  py-5">
                        <?php echo e($product); ?>

                    </h2>
                </a>
            </div>
            <div class="md:col-span-1 flex flex-col p-4">
                <h3 class="text-2xl p-4">
                    Total Users
                </h3>
                <a href="<?php echo e(route('admin.users')); ?>">
                    <h2 class="text-5xl font-bold bg-blue-300  py-5">
                        <?php echo e($users); ?>

                    </h2>
                </a>
            </div>
            <div class="md:col-span-1 flex flex-col p-4">
                <h3 class="text-2xl p-4">
                    Coupon
                </h3>
                <a href="<?php echo e(route('admin.coupon')); ?>">
                    <h2 class="text-5xl font-bold bg-blue-300  py-5">
                        <?php echo e($coupon); ?>

                    </h2>
                </a>
            </div>
            <div class="md:col-span-1 flex flex-col p-4">
                <h3 class="text-2xl p-4">
                    Pages
                </h3>
                <a href="<?php echo e(route('admin.pageamdin')); ?>">
                    <h2 class="text-5xl font-bold bg-blue-300  py-5">
                        <?php echo e($pages); ?>

                    </h2>
                </a>
            </div>

            <div class="md:col-span-1 flex flex-col p-4">
                <h3 class="text-2xl p-4">
                    Catch of Day
                </h3>
                <a href="<?php echo e(route('admin.catchofday')); ?>">
                    <h2 class="text-5xl font-bold bg-blue-300  py-5">
                        <?php echo e($catch); ?>

                    </h2>
                </a>
            </div>
            <div class="md:col-span-1 flex flex-col p-4">
                <h3 class="text-2xl p-4">
                    Offers
                </h3>
                <a href="<?php echo e(route('admin.offers')); ?>">
                    <h2 class="text-5xl font-bold bg-blue-300  py-5">
                        <?php echo e($offer); ?>

                    </h2>
                </a>
            </div>
            <div class="md:col-span-1 flex flex-col p-4">
                <h3 class="text-2xl p-4">
                    Environment Setting
                </h3>
                <a href="<?php echo e(route('admin.enviroment.index')); ?>">
                    <h2 class="text-5xl font-bold bg-blue-300  py-5">
                        Set
                    </h2>
                </a>
            </div>
        </div>
    </div>
</div><?php /**PATH /home/u305151613/domains/supremepure.in/public_html/resources/views/livewire/admin/dashboard.blade.php ENDPATH**/ ?>