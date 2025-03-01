<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Livewire || Project</title>
    @livewireStyles
    <style>
        .counter_app{
            text-align: center;
        }
        .increment{
            padding:10px 20px;
            background-color: blue;
            border: none;
            color:white;
            font-size:20px;

        }
    </style>
</head>
<body>
{{--
 This is first livewire project  --}}
    <livewire:counter />


    @livewireScripts
</body>
</html>
