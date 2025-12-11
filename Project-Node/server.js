const http = require('http');
const server = http.createServer((req, res) => {
    res.writeHead(200, { 'Content-Type': 'text/plain' });
    res.end('Xin chao! Day la moi truong Node.js chay tren Docker\n');
});
server.listen(3000, () => {
    console.log('Server running on port 3000');
});
