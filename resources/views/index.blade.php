<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GCD</title>
</head>

<body>
    <form id="form1" name="form1" method="get" action="{{ route('calculate') }}">
        <p>
            <label for="Number1">第一個數字：</label>
            <input name="Number1" type="text" id="Number1" size="20" maxlength="15" required />
        </p>
        <p>
            <label for="Number2">第二個數字：</label>
            <input name="Number2" type="text" id="Number2" size="20" maxlength="15"  required/>
        </p>
        <input type="submit" name="button" id="button" value="送出" />
    </form>

    <p>
        <iframe src="{{ route('show') }}" frameborder="0" class="iframe"></iframe>
    </p>
</body>
</html>