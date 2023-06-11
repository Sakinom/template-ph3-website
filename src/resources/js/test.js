console.log("test!!!!")
// let users = $('#users').val();
// console.log(users);

const usersInput = document.getElementById('users'); // JSONデータを取得
// console.log(usersInput.value);
// const users = usersInput.value;

const users = JSON.parse(usersInput.value); // JSONをオブジェクトにパース
users.forEach(user => {
  console.log(user.name);
});

// const usersInput = document.querySelectorAll('#users'); // JSONデータを取得
// usersInput.forEach(user => {
//   console.log(usersInput);

// })