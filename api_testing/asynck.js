// async function fetchUserData() {
//     try {
//       const response = await fetch("https://jsonplaceholder.typicode.com/users/1");
      
//       if (!response.ok) {
//         throw new Error(`Error: ${response.status} - ${response.statusText}`);
//       }
  
//       const data = await response.json(); // Convert response to JSON
//       console.log(data);
//     } catch (error) {
//       console.error(error);
//     }
//   }
  
//   fetchUserData();
  

  //callback hell

  getUser(1, (user) => {
    console.log("User:", user);
  
    getOrders(user.id, (orders) => {
      console.log("Orders:", orders);
  
      getOrderDetails(orders[0].id, (orderDetails) => {
        console.log("Order Details:", orderDetails);
  
        processPayment(orderDetails, (paymentStatus) => {
          console.log("Payment Status:", paymentStatus);
          
          sendEmail(user.email, "Order Confirmed", (emailStatus) => {
            console.log("Email Sent:", emailStatus);
          });
        });
      });
    });
  });
  