<?php require_once 'app/views/templates/headerPublic.php' ?>
<main role="main" class="container mx-auto px-4 py-12">

  <div class="max-w-xl mx-auto bg-white shadow-md rounded-lg p-8">
    <h1 class="text-2xl font-bold text-center text-blue-600 mb-6">Reminders</h1>
    <p class="text-gray-700 text-center mb-4">
      <a href="reminders/create" class="text-blue-500 hover:underline">Create a new reminder</a>
    </p>
  </div>

  <div class="max-w-xl mx-auto mt-6">
    <?php foreach ($data['reminders'] as $reminder): ?>
      <div class="flex justify-between items-center border-b py-2">
        <p class="text-gray-800"><?= htmlspecialchars($reminder['subject']) ?></p>
        <div class="space-x-2">
          <a href="reminders/update/<?= $reminder['id'] ?>" class="text-blue-500 hover:underline">Update</a>
          <a href="reminders/delete/<?= $reminder['id'] ?>" class="text-red-500 hover:underline" onclick="return confirm('Are you sure you want to delete this reminder?')">Delete</a>
        </div>
      </div>
    <?php endforeach; ?>
  </div>

</main>
<?php require_once 'app/views/templates/footer.php' ?>
