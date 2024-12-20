<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ByteTest</title>
    <style>
        .container {
            height: calc(20rem + var(--font-xl));
        }

        .editor {
            z-index: 0;
            flex: 1;
            height: 100%;
            overflow-y: auto;
        }

        .output {
            flex: 1;
            height: 100%;
            color: var(--editor-output-txt-color);
            border-left: 1px solid var(--editor-border-color);
            background-color: var(--editor-output-bg);
            padding-left: 1rem;
            overflow-y: auto;
        }

        .runButton {
            color: var(--run-txt-color);
            background-color: var(--run-btn-bg);
            font-size: var(--font-m);
            padding: 0.5rem 1rem;
            margin: 0.5rem;
            border: none;
            border-radius: 0.5rem;
            cursor: pointer;
        }

        .runButton:hover {
            background-color: var(--run-btn-hover);
        }

        @media (width > 768px) {
            .container {
                display: flex;
            }
        }
    </style>
</head>

<body>
    <button class="runButton">Run</button>
    <div class="container">
        <div class="editor"></div>
        <div class="output">Output will be displayed here</div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.37.0/ace.js"
        integrity="sha512-AYZKM93Ch1NQ0U57Na4pMAFoAfYviwmhZQWfUfbGtzYM4vs+DiQ8d02ByhyYAVMPgJWmb5qdWlN8cPDKCWS8iw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        var editor = ace.edit(document.querySelector(".editor"));
        editor.setTheme("ace/theme/monokai");
        editor.session.setMode("ace/mode/php");

        document.querySelector('.runButton').addEventListener('click', function () {
            var code = editor.getValue();
            var xhr = new XMLHttpRequest();
            xhr.open('POST', '/ByteTest/core/execute.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4) {
                    if (xhr.status === 200) {
                        document.querySelector('.output').innerText = xhr.responseText;
                    } else {
                        document.querySelector('.output').innerText = 'Error: ' + xhr.status;
                    }
                }
            };
            xhr.send('code=' + encodeURIComponent(code));
        });
    </script>
</body>

</html>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $code = $_POST['code'];
    $output = '';

    $tempFile = tempnam(sys_get_temp_dir(), 'php');
    file_put_contents($tempFile, "<?php\n{$code}");
    $output = shell_exec("php " . escapeshellarg($tempFile));
    unlink($tempFile);

    echo $output;
    exit;
}
?>