// const axios = require('axios');
//
// export default class GetUserData{
//
//     async getUser(){
//          let res = await axios.get('/getuser');
//         console.log(res.data);
//         return res.data;
//      }
//
// }

//
async function getUser(){
         let res = await axios.get('/getuser');
         console.log('from API',res.data)
        return res.data;
     }

export default getUser;
