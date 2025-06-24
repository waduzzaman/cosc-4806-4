<?php require_once 'app/views/templates/headerPublic.php' ?>
<main role="main" class="container mx-auto px-4 py-12">

  <!-- Lockout Message -->
  <?php if (isset($_SESSION['lockout'])) : ?>
    <p class="text-red-600 text-center mb-4"><?= $_SESSION['lockout']; ?></p>
    <?php unset($_SESSION['lockout']); ?>
  <?php endif; ?>

  <div class="max-w-xl mx-auto bg-white shadow-md rounded-lg p-8">
    <h1 class="text-2xl font-bold text-center text-blue-600 mb-6">Reminders</h1>
  </div>

  <?php if (!empty($data['reminders'])): ?>
    <pre><?php print_r($data['reminders']); ?></pre>
  <?php else: ?>
    <p class="text-center text-gray-500">No reminders found.</p>
  <?php endif; ?>

</main>
<?php require_once 'app/views/templates/footer.php' ?>
