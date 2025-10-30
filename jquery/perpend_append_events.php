<html>
<head>
    <title>Prepend & append Event</title>
    <link rel="stylesheet" href="margepadd.css" />
    <script src='jquery.js'></script>
    <script>
    </script>
    <script>
        $(document).ready(function(){
            $("#append").click(function(){
                $("ul").append(document.getElementById('rb1').value);
            });
        });
    </script>
</head>
<body>
    <h3>Subjects</h3>
    <label><input id="rb1" name="subject" class="subjectsClass" type="radio" value="php"/>php</label>
    <!-- <label><input name="subject" class="subjectsClass" type="radio" value="Asp"/>Asp</label>
    <label><input name="subject" class="subjectsClass" type="radio" value="JavaScript"/>JavaScript</label>
    <label><input name="subject" class="subjectsClass" type="radio" value="Python"/>Python</label> -->
    <br /><br />
    <!-- <button id="Prepend">Prepend</button> -->
    <button id="append">append</button>
    <ul>
    </ul>
</body>
</html>