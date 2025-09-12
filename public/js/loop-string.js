 function runCode() {
            const userCode = document.getElementById('code-editor').value;
            const outputDiv = document.getElementById('output');

            outputDiv.textContent = '';

            const originalLog = console.log;
            console.log = function (...args) {
                outputDiv.textContent += args.join(' ') + '\n';
                originalLog.apply(console, args);
            };

            try {
                new Function(userCode)();
            } catch (error) {
                outputDiv.textContent += 'Error: ' + error.message + '\n';
            }

            console.log = originalLog;
        }