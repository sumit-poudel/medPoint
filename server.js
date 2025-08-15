import express from "express"
import { fileURLToPath } from "url"
import { dirname } from "path";

const app = express();
const port = 1234;
const _dirname = dirname(fileURLToPath(import.meta.url));
app.use(express.urlencoded({ extended: true }));

app.use(express.static(_dirname + "/public"))
app.get('/', (req, res) => {
  res.sendFile(_dirname + "/index.html")
})

app.get('/login', (req, res) => {
  res.sendFile(_dirname + "/login.html")
})
app.listen(port, (error) => {
  if (error) console.log("error starting server");
  else console.log("server started at post " + port);
})
