<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Backbone</title>
</head>
<body>
    <h1>Contacts Backbone</h1>
    <script src="/js/underscore.js"></script>
    <script src="/js/jquery.js"></script>
    <script src="/js/backbone.js"></script>
    <script src="/js/main.js"></script>
    <script src="/js/models.js"></script>
    <script src="/js/collections.js"></script>
    <script src="/js/views.js"></script>
    <script src="/js/routers.js"></script>

    <script>
        console.log(44);
        new App.Router();
        Backbone.history.start();
        App.contacts = new App.Collections.Contacts();
        App.contacts.fetch().then(function(){
            new App.Views.App({ collection: App.contacts });
        });
    </script>
</body>
</html>
