<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
  </head>
  
  <body>

        
    <div class="bg-gray-100 dark:bg-gray-900">
      <div class="w-full max-w-3xl mx-auto p-8">
          <div class="bg-white dark:bg-gray-800 p-8 rounded-lg shadow-md border dark:border-gray-700">
              <h1 class="text-2xl font-bold text-gray-800 dark:text-white mb-4">Personal information</h1>
  
              <div class="mb-6">
                  <h2 class="text-gray-700 dark:text-white mb-2">Use a permanent address where you can receive mail.</h2>
                  </div>
                  <form action="./index.php" method="post">
                  <div class="grid grid-cols-2 gap-4">
                      <div>
                          <label for="first_name" class="block text-gray-700 dark:text-white mb-1">First Name</label>
                          <input type="text" id="first_name" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none">
                      </div>
                      <div>
                          <label for "last_name" class="block text-gray-700 dark:text-white mb-1">Last Name</label>
                          <input type="text" id="last_name" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none">
                      </div>
                  </div>
  
                  <div class="mt-4">
                      <label for="address" class="block text-gray-700 dark:text-white mb-1">Email address</label>
                      <input type="text" id="address" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none">
                  </div>
  
                  <label for="countries" class="block text-gray-700 dark:text-white mb-1 text-sm font-medium ">Country</label>
                      <select id="countries" class="text-sm">
                      <option>-</option>
                      <option>United States</option>
                      <option>Canada</option>
                      <option>France</option>
                      <option>Germany</option>
                  </select>

                  <div>
                    <label for="address" class="block text-gray-700 dark:text-white mb-1">Street address</label>
                    <input type="text" id="state" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none">
                </div>

  
                  <div class="grid grid-cols-3 gap-4 mt-4">
                      <div>
                          <label for="city" class="block text-gray-700 dark:text-white mb-1">City</label>
                          <input type="text" id="state" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none">
                      </div>
                      <div>
                          <label for="state" class="block text-gray-700 dark:text-white mb-1">State/Province</label>
                          <input type="text" id="zip" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none">
                      </div>
                      <div>
                        <label for="zip" class="block text-gray-700 dark:text-white mb-1">Zip/Postal code</label>
                        <input type="text" id="zip" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none">
                    </div>
                  </div>
              </div>
              </form>
              <div>
                
              <?php 

                $First_name = $_POST['First_name'];
                $last_name = $_POST['last_name'];
                $email = $_POST['email'];
                $country = $_POST['countries'];
                $address = $_POST['address'];
                $city = $_POST['city'];
                $state = $_POST['state'];
                $zip = $_POST['zip'];

            if (!empty($name) and !empty($last_name) and !empty($email) and !empty($country) and !empty($street) and !empty($city) and !empty($state) and !empty($zip)) {
                echo "<p>First_name: " .$Firstname. "</p>";
                echo "<p>Last_name: " .$lastname. "</p>";
                echo "<p>Email: " .$email. "</p>";
                echo "<p>Countries: " .$countries. "</p>";
                echo "<p>Adress: " .$address. "</p>";
                echo "<p>City: " .$city. "</p>";
                echo "<p>State: " .$state. "</p>";
                echo "<p>Postal code: " .$zip. "</p>";
            } else {
                echo "Forgot to fill in a required field";
            }
        ?>    
  </div>
  
  </body>
</html>
