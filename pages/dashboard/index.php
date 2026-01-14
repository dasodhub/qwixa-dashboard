<?php include_once '../app/app-header.php' ?>


<main class="px-12 py-4 flex-1 mt-16 flex flex-col w-full">

 <!-- Section for dashboard cards -->
  <section class="flex gap-6 w-full rounded mt-4">
    <div class="container-1 p-4 flex-1 bg-[#20ce94] text-white rounded">
      <div class="flex">
        <p class="text-sm">Total Users</p>
      </div>
      <p class="text-2xl font-bold">1000</p>
    </div>
    <div class="container-2 p-4 flex-1 bg-[#20ce94] text-white rounded shadow-xs">
      <p class="text-sm">Total Transactions</p>
      <p class="text-2xl font-bold">1000</p>
    </div>
    <div class="container-3 p-4 flex-1 bg-[#20ce94] text-white rounded shadow-xs">
      <p class="text-sm">Total Transaction Amount</p>
      <p class="text-2xl font-bold">₦100</p>
    </div>
    <div class="container-4 p-4 flex-1 bg-[#20ce94] text-white rounded shadow-xs">
      <p class="text-sm">Total Users Balance</p>
      <p class="text-2xl font-bold">₦1000</p>
    </div>
  </section>

  <section class="quick-overview flex gap-6 justify-between w-full rounded mt-6.5 p-4">
    <div class="quick-users flex-1 bg-white p-4 rounded shadow-xs flex flex-col gap-3.5">
        <p class="text-sm text-gray-500">New Users Overview</p>
        <div class="relative overflow-x-auto bg-gray-50 rounded">
            <table class="w-full text-sm text-left rtl:text-right text-body">
                <thead class="text-sm text-body bg-neutral-secondary-medium border-b border-gray-200 border-default-medium">
                    <tr>
                        <th scope="col" class="px-6 py-3 font-medium">
                            First Name
                        </th>
                        <th scope="col" class="px-6 py-3 font-medium">
                            Last Name
                        </th>
                        <th scope="col" class="px-6 py-3 font-medium">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3 font-medium">
                            Phone
                        </th>
                        <th scope="col" class="px-6 py-3 font-medium">
                            Action
                        </th>
                    </tr>
                </thead>

                <?php 

                $stmt = $pdo->prepare("SELECT * FROM users ORDER BY id DESC LIMIT 10");
                $stmt->execute();
                $registeredUsers = $stmt->fetchAll(PDO::FETCH_ASSOC);

                //print_r($registeredUsers);

                foreach($registeredUsers as $registeredUser) {

                    ?>

                    <tbody>
                        <tr class="bg-neutral-primary-soft border-b border-gray-200  border-default">
                            <th scope="row" class="px-6 py-4 font-normal text-heading whitespace-nowrap">
                                <?php echo $registeredUser['first_name']?>    
                            </th>
                            <td class="px-6 py-4">
                                <?php echo $registeredUser['last_name']?>    
                            </td>
                            <td class="px-6 py-4">
                                <?php echo $registeredUser['email']?>    
                            </td>
                            <td class="px-6 py-4">
                                <?php echo $registeredUser['phonenumber']?>    
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="font-medium text-fg-brand hover:underline">Edit</a>
                            </td>
                        </tr>
                    </tbody>


                    <?php 
                }


                ?>
            </table>
        </div>

    </div>
    <div class="quick-transactions flex-1 bg-white p-4 rounded shadow-xs flex flex-col gap-3.5">
      <p class="text-sm">Quick Transactions Overview</p>
      <p class="text-2xl font-bold">1000</p>
    </div>
  </section>



</main>
        


<?php include_once '../app/app-footer.php'; ?>