document.querySelector('#button').addEventListener('click', logDebug);

function logDebug(){
    logMessages()
}

function logMessages() {
    console.log('Message');
    console.warn('Attention!');
    console.error('ERREUR');
}

