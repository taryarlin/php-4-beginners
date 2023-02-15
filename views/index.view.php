<?php require('partials/head.php'); ?>
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 text-center">
        <h3><?= $page_title ?></h3>

        <button id="fetch_user" class="px-4 py-2 bg-indigo-600 text-white rounded shadow-md mt-4">Fetch User Data</button>

        <table id="user_table">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Gender</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody id="user_table_body">

            </tbody>
        </table>

        <table
    </div>
<?php require('partials/footer.php'); ?>


<script>
    $(() => {
        $('#user_table').DataTable({
            ajax: '/users',
            columns: [
                {data: "username"},
                {data: "email"},
                {data: "phone"},
                {data: "gender"},
                {data: "address"},
            ]
        });

        $('#fetch_user').click(function(e) {
            e.preventDefault();
            // XMLHttpRequest
            $.get('/users', function (res) {
                let users = JSON.parse(res).data;

                users.forEach(user => {
                    let template = `
                        <tr>
                            <td>${user.username}</td>
                            <td>${user.email}</td>
                            <td>${user.phone}</td>
                            <td>${user.gender}</td>
                            <td>${user.address}</td>
                        </tr>
                    `;

                    $('#user_table_body').append(template)
                })
            })
        })
    })
</script>
