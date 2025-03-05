// console.log("GET API Example");

// fetch("https://jsonplaceholder.typicode.com/users/1")
//   .then(response => response.json()) // Convert response to JSON
//   .then(data => console.log(data))   // Print data
//   .catch(error => console.error("Error:", error)); // Handle errors

// console.log("POST API Exapmles")

// fetch("https://jsonplaceholder.typicode.com/posts", {
//   method: "POST",
//   body: JSON.stringify({
//     title: "foo",
//     body: "bar",
//     userId: 1
//   }),
//   headers: {
//     "Content-type": "application/json; charset=UTF-8"
//   }
// })
//   .then(response => response.json())
//   .then(json => console.log(json))
//   .catch(err => console.log(err));

// fetch("https://jsonplaceholder.typicode.com/users", {
//     method:"POST",
//     headers:{   
//         "Content-Type":"application/json"
//     },
//     body:JSON.stringify({
//         id:101,
//         name:"Ashish Prajapati",
//         Task:"API",
//         code:"Anticoder03"
//     })
// }).then(res=>res.json()).then(data=>console.log(data)).catch(err=>console.log(err))
    
    

// console.log("PUT API Exapmle1")
// fetch("https://jsonplaceholder.typicode.com/posts/1", {
//     method:"PUT",
//     headers:{   
//         "Content-Type":"application/json"
//     },
//     body:JSON.stringify({
//         name:"Ashish Prajapati",
//         Task:"API",
//         code:"Anticoder03"
//     })
// }).then(res=>res.json()).then(data=>console.log(data)).catch(err=>console.log(err))




console.log("DELETE API Exapmle")
fetch("https://jsonplaceholder.typicode.com/posts/1", {
    method:"DELETE",
   
}).then(res=>res.json()).then(data=>console.log(data)).catch(err=>console.log(err))
