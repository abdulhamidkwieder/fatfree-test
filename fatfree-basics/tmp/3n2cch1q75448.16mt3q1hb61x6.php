<style>
    p {
        color: blue;
        font-size: 3em;
    }
    h1 {
        font-size: 4em;
        color: red;
         font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; text-align: center;
    }
</style>
<h1>Welcome Hamid <?= ($pagename) ?></h1>

<p>User: <?= ($user['name']) ?></p>
<p>Email: <?= ($user['email']) ?></p>