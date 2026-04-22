// importo dgram di node.js per creare un socket UDP (modulo core)
const dgram = require('dgram');

// importo readline per poter leggere i dati inviati dall'utente attraverso il terminale
const readline = require('readline');

// indirizzo IP e porta del server a cui inviare il messaggio
const HOST = "127.0.0.1";
const PORT = 41234;

// crea un socket UDP utilizzando IPv4
const client = dgram.createSocket('udp4');

// input terminale
const rl = readline.createInterface({
    input: process.stdin,
    output: process.stdout
});

// chiedo il messaggio
rl.question('Scrivi il messaggio da inviare: ', (messaggio) => {
    // preparo buffer dal messaggio inserito
    const buffer = Buffer.from(messaggio);

    // handler per la risposta del server (una sola risposta attesa)
    client.once('message', (msg, info) => {
        console.log(`[client] ricevuto da ${info.address}:${info.port} -> ${msg.toString()}`);
        client.close();
        rl.close();
    });

    client.on('error', (err) => {
        console.error('[client] errore socket:', err);
        try { client.close(); } catch (e) {}
        try { rl.close(); } catch (e) {}
    });

    // invio del messaggio al server con callback per error/report
    client.send(buffer, PORT, HOST, (err) => {
        if (err) console.error('[client] errore invio:', err);
        else console.log(`[client] messaggio inviato a ${HOST}:${PORT}`);
    });

    // fallback: se non arriva risposta entro 5s, chiudo
    const timeout = setTimeout(() => {
        console.log('[client] timeout: nessuna risposta ricevuta');
        try { client.close(); } catch (e) {}
        try { rl.close(); } catch (e) {}
    }, 5000);

    client.on('close', () => clearTimeout(timeout));
});


