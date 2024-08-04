document.addEventListener('DOMContentLoaded', () => {
  $loadUsers('div.room');
  $roomControl('form.room-kick');
  $roomControl('form.user-kick');
});

const $loadUsers = ($element) => {
  document.querySelectorAll($element).forEach(($i) => {
    const $id = $i.dataset.room;
    const $card = `#room-${$id} .card-body`;
    const $users = `user.list.php?room=${$id}`;

    setInterval(async function () {
      const $response = await fetch($users, {
        cache: 'no-cache',
        headers: {'Cache-Control': 'no-cache'}
      });
      document.querySelector($card).innerHTML = await $response.text();
    }, 1000);
  });
};

const $roomControl = ($element) => {
  document.querySelector($element).addEventListener('submit', ($e) => {
    const $form = this;
    const $data = new FormData($form);
    const $body = new URLSearchParams($data).toString();

    fetch($form.getAttribute('action'), {
      method: $form.getAttribute('method'),
      body: $body,
      cache: 'no-cache',
      headers: {'Cache-Control': 'no-cache'}
    }).then($response => $response.text());

    $e.preventDefault();

    const $button = $form.querySelector('button[type="submit"]');
    $button.disabled = true;
    setTimeout(function () {
      $button.disabled = false;
    }, 5000);
  });
};
