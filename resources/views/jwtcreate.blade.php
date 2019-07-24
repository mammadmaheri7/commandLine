
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>

    <div id="jwtcmp">
        <div style="padding: 5px" >
            <div class="form-group">
                <button type="submit"  class="btn btn-primary" v-on:click="showInfo">Create Order</button>
                <p v-cloak>Info : @{{info}}</p>
                <p v-cloak="">UserName : @{{username}}</p>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>