<aside class="bg-[#25ac7f] text-white p-4 w-64 h-full min-h-screen z-10">
        <div class="flex flex-col items-start justify-between gap-4 overflow-auto">
            <img src="../../images/logo.png" class="h-12" alt="Qwixapay Logo" />
            <hr class="border-b border-white">

            <ul class="flex flex-col gap-1.5">
                <li class="py-2 px-4 rounded-md hover:bg-[#1a8f65] cursor-pointer <?php if($title == 'Admin Dashboard') : ?> bg-[#1a8f65] <?php endif; ?>">
                    <div class="flex items-center gap-1">
                        <img src="../../images/nav/dashboard.svg" alt="Dashboard Icon" class="h-5 w-5 mr-2 fill-white stroke-white color-white">
                        <p>Dashboard</p>
                    </div>
                </li>

                <li class="py-2 px-4 rounded-md hover:bg-[#1a8f65] cursor-pointer <?php if($title == 'Transactions') : ?> bg-[#1a8f65] <?php endif; ?></li>">
                    <div class="flex items-center gap-1">
                        <img src="../../images/nav/receipt (5).svg" alt="Transactions Icon" class="h-5 w-5 mr-2 fill-white stroke-white">
                        <p>Transactions</p>
                    </div>
                </li>

                <li class="py-2 px-4 rounded-md hover:bg-[#1a8f65] cursor-pointer <?php if($title == 'Users') : ?> bg-[#1a8f65] <?php endif; ?>">
                    <div class="flex items-center gap-1">
                        <img src="../../images/nav/user (3).svg" alt="Users Icon" class="h-5 w-5 mr-2 fill-white stroke-white">
                        <p>Users</p>
                    </div>
                </li>

                <li class="py-2 px-4 rounded-md hover:bg-[#1a8f65] cursor-pointer <?php if($title == 'Wallet & Accounts') : ?> bg-[#1a8f65] <?php endif; ?>">
                    <div class="flex items-center gap-1">
                        <img src="../../images/nav/wallet.svg" alt="Wallets & Accounts Icon" class="h-5 w-5 mr-2 fill-white stroke-white">
                        <p>Wallets & Accounts</p>
                    </div>
                </li>

                <li class="py-2 px-4 rounded-md hover:bg-[#1a8f65] cursor-pointer <?php if($title == 'KYC & Compliance') : ?> bg-[#1a8f65] <?php endif; ?>">
                    <div class="flex items-center gap-1">
                        <img src="../../images/nav/shield-check.svg" alt="KYC & Compliance Icon" class="h-5 w-5 mr-2 fill-white stroke-white">
                        <p>KYC & Compliance</p>
                    </div>
                </li>

                <li class="py-2 px-4 rounded-md hover:bg-[#1a8f65] cursor-pointer <?php if($title == 'Fraud & Risk') : ?> bg-[#1a8f65] <?php endif; ?>">
                    <div class="flex items-center gap-1">
                        <img src="../../images/nav/fraud-detection.svg" alt="Fraud & Risk Icon" class="h-5 w-5 mr-2 fill-white stroke-white">
                        <p>Fraud & Risk</p>
                    </div>
                </li>

                <li class="py-2 px-4 rounded-md hover:bg-[#1a8f65] cursor-pointer <?php if($title == 'Merchants') : ?> bg-[#1a8f65] <?php endif; ?>">
                    <div class="flex items-center gap-1">
                        <img src="../../images/nav/seller.svg" alt="Merchants Icon" class="h-5 w-5 mr-2 fill-white stroke-white">
                        <p>Merchants</p>
                    </div>
                </li>  

                <li class="py-2 px-4 rounded-md hover:bg-[#1a8f65] cursor-pointer <?php if($title == 'Fees & Pricing') : ?> bg-[#1a8f65] <?php endif; ?></li>">
                    <div class="flex items-center gap-1">
                        <img src="../../images/nav/fee-receipt.svg" alt="Fees & Pricing Icon" class="h-5 w-5 mr-2 fill-white stroke-white">
                        <p>Fees & Pricing</p>
                    </div>
                </li>

                <li class="py-2 px-4 rounded-md hover:bg-[#1a8f65] cursor-pointer <?php if($title == 'Notifications') : ?> bg-[#1a8f65] <?php endif; ?>">
                    <div class="flex items-center gap-1">
                        <img src="../../images/nav/bell-notification-social-media.svg" alt="Notifications Icon" class="h-5 w-5 mr-2 fill-white stroke-white">
                        <p>Notifications</p>
                    </div>
                </li>

                <li class="py-2 px-4 rounded-md hover:bg-[#1a8f65] cursor-pointer <?php if($title == 'Reports & Analytics') : ?> bg-[#1a8f65] <?php endif; ?>">
                    <div class="flex items-center gap-1">
                        <img src="../../images/nav/analytics.svg" alt="Reports & Analytics Icon" class="h-5 w-5 mr-2 fill-white stroke-white">
                        <p>Reports & Analytics</p>
                    </div>
                </li>

                <li class="py-2 px-4 rounded-md hover:bg-[#1a8f65] cursor-pointer <?php if($title == 'Admin & Roles') : ?> bg-[#1a8f65] <?php endif; ?>">
                    <div class="flex items-center gap-1">
                        <img src="../../images/nav/admin-alt.svg" alt="Admin & Roles Icon" class="h-5 w-5 mr-2 fill-white stroke-white">
                        <p>Admin & Roles</p>
                    </div>
                </li>

                <li class="py-2 px-4 rounded-md hover:bg-[#1a8f65] cursor-pointer <?php if($title == 'System Settings') : ?> bg-[#1a8f65] <?php endif; ?></li>">
                    <div class="flex items-center gap-1">
                        <img src="../../images/nav/settings.svg" alt="System Settings Icon" class="h-5 w-5 mr-2 fill-white stroke-white">
                        <p>System Settings</p>
                    </div>
                </li>

                <!-- <div class="dashboard-container bg-[#1a8f65] text-white p-4 rounded-md bottom-12 w-[80%] mx-auto absolute mt-2">
                    <h3 class="text-lg font-bold">Qwixapay v1.0.0</h3>
                    <p class="text-sm font-mono">Built by <a href="https://wa.me/2348063175813" class="text-green-400">Dasodhub Technologies</a></p>
                </div> -->


            </ul>
      </div>
</aside>