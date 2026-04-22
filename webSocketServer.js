

// importo dgram di node.js per creare un socket UDP (modulo core)
const dgram = require('dgram');


// crea un socket UDP utilizzando IPv4
const server = dgram.createSocket('udp4');


// indirizzo IP e porta del server su cui ascoltare
const HOST = "127.0.0.1";
const PORT = 41234;

// gestore evento per messaggio (si attiva a ogni messaggio ricevuto)
server.on("message", (msg, info) => {
    console.log(`[server] messaggio ricevuto da ${info.address}:${info.port} -> ${msg.toString()}`);
    // invia messaggio di conferma al client e logga eventuali errori
    server.send("ricevuto", info.port, info.address, (err) => {
        if (err) console.error('[server] errore invio risposta:', err);
        else console.log(`[server] risposta inviata a ${info.address}:${info.port}`);
    });
});

// log quando il server è in ascolto
server.on('listening', () => {
    const address = server.address();
    console.log(`[server] in ascolto su ${address.address}:${address.port}`);
});

// gestione errori socket
server.on('error', (err) => {
    console.error('[server] errore socket:', err);
    server.close();
});

// bind del server alla porta/host
server.bind(PORT, HOST);