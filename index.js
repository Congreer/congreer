const express = require("express");
const app = express();
require("dotenv").config();

app.listen(process.env.PORT||8000,()=>{
    console.log("Up and running")
})