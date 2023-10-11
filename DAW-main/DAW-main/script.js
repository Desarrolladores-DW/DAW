const output = document.getElementById('output');
const input = document.getElementById('input');

input.addEventListener('keydown', async function (e) {
    if (e.key === 'Enter') {
        e.preventDefault();
        const command = input.value;
        input.value = '';
        const result = await executeCommand(command);
        appendToOutput(result);
    }
});

async function executeCommand(command) {
    const url = 'https://replit.com/data/repl_it_system_scripts/run_code';
    const language = 'javascript'; // Puedes cambiar esto a 'python' o 'ruby' según el lenguaje deseado.

    const response = await fetch(url, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({
            language,
            code: command,
        }),
    });

    const data = await response.json();
    return data.output;
}

function appendToOutput(text) {
    output.innerHTML += text + '\n';
    output.scrollTop = output.scrollHeight;
}
