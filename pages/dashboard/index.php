<?php 

$title = 'Admin Dashboard'

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?> | Qwixapay</title>
    <link rel="stylesheet" href="../../src//output.css">
    <link rel="shortcut icon" href="../../images/quixa.jpeg" type="image/x-icon">
  </head>
<body>

<aside class="bg-[#25ac7f] text-white p-4 w-64 h-full min-h-screen relative">
    <div class="flex flex-col items-start justify-between">
        <img src="../../images/logo.png" class="h-12" alt="Qwixapay Logo" />
        <hr class="border-b border-white">

        <ul>
            <li class="py-2 px-4 rounded-md hover:bg-[#1a8f65] <?php if($title == 'Admin Dashboard') : ?> bg-[#1a8f65] <?php endif; ?>">
                <div class="flex items-center gap-1">
                    <img src="../../images/nav/dashboard.svg" alt="Dashboard Icon" class="h-5 w-5 mr-2 fill-white stroke-white color-white">
                    <p>Dashboard</p>
                </div>
            </li>

            <li class="py-2 px-4 rounded-md hover:bg-[#1a8f65]">
                <div class="flex items-center gap-1">
                    <img src="../../images/nav/receipt (5).svg" alt="Transactions Icon" class="h-5 w-5 mr-2 fill-white stroke-white">
                    <p>Transactions</p>
                </div>
            </li>

            <li class="py-2 px-4 rounded-md hover:bg-[#1a8f65]">
                <div class="flex items-center gap-1">
                    <img src="../../images/nav/user (3).svg" alt="Users Icon" class="h-5 w-5 mr-2 fill-white stroke-white">
                    <p>Users</p>
                </div>
            </li>

            <li class="py-2 px-4 rounded-md hover:bg-[#1a8f65]">
                <div class="flex items-center gap-1">
                    <img src="../../images/nav/wallet.svg" alt="Wallets & Accounts Icon" class="h-5 w-5 mr-2 fill-white stroke-white">
                    <p>Wallets & Accounts</p>
                </div>
            </li>

            <li class="py-2 px-4 rounded-md hover:bg-[#1a8f65]">
                <div class="flex items-center gap-1">
                    <img src="../../images/nav/shield-check.svg" alt="KYC & Compliance Icon" class="h-5 w-5 mr-2 fill-white stroke-white">
                    <p>KYC & Compliance</p>
                </div>
            </li>

            <li class="py-2 px-4 rounded-md hover:bg-[#1a8f65]">
                <div class="flex items-center gap-1">
                    <img src="../../images/nav/fraud-detection.svg" alt="Fraud & Risk Icon" class="h-5 w-5 mr-2 fill-white stroke-white">
                    <p>Fraud & Risk</p>
                </div>
            </li>

            <li class="py-2 px-4 rounded-md hover:bg-[#1a8f65]">
                <div class="flex items-center gap-1">
                    <img src="../../images/nav/seller.svg" alt="Merchants Icon" class="h-5 w-5 mr-2 fill-white stroke-white">
                    <p>Merchants</p>
                </div>
            </li>  

            <li class="py-2 px-4 rounded-md hover:bg-[#1a8f65]">
                <div class="flex items-center gap-1">
                    <img src="../../images/nav/fee-receipt.svg" alt="Fees & Pricing Icon" class="h-5 w-5 mr-2 fill-white stroke-white">
                    <p>Fees & Pricing</p>
                </div>
            </li>

            <li class="py-2 px-4 rounded-md hover:bg-[#1a8f65]">
                <div class="flex items-center gap-1">
                    <img src="../../images/nav/bell-notification-social-media.svg" alt="Notifications Icon" class="h-5 w-5 mr-2 fill-white stroke-white">
                    <p>Notifications</p>
                </div>
            </li>

            <li class="py-2 px-4 rounded-md hover:bg-[#1a8f65]">
                <div class="flex items-center gap-1">
                    <img src="../../images/nav/analytics.svg" alt="Reports & Analytics Icon" class="h-5 w-5 mr-2 fill-white stroke-white">
                    <p>Reports & Analytics</p>
                </div>
            </li>

            <li class="py-2 px-4 rounded-md hover:bg-[#1a8f65]">
                <div class="flex items-center gap-1">
                    <img src="../../images/nav/admin-alt.svg" alt="Admin & Roles Icon" class="h-5 w-5 mr-2 fill-white stroke-white">
                    <p>Admin & Roles</p>
                </div>
            </li>

            <li class="py-2 px-4 rounded-md hover:bg-[#1a8f65]">
                <div class="flex items-center gap-1">
                    <img src="../../images/nav/settings.svg" alt="System Settings Icon" class="h-5 w-5 mr-2 fill-white stroke-white">
                    <p>System Settings</p>
                </div>
            </li>

            <div class="dashboard-container bg-[#1a8f65] text-white p-4 rounded-md bottom-12 w-[80%] mx-auto absolute">
                <h3 class="text-lg font-bold">Qwixapay v1.0.0</h3>
                <p class="text-sm font-mono">Built by <a href="https://wa.me/2348063175813" class="text-green-400">Dasodhub Technologies</a></p>
            </div>


        </ul>
    </div>
</aside>





    







</body>
</html>