# Train-Ticket-Reservation-System
## Mini Project of Campus

### Scope

This project aims to design and implement a Railway Ticket Reservation System that will enable passengers to book their travels online from their various locations. The Rail Ticket Reservation System is developing to automate the Railway Reservation System. Therefore, the proposed "Railway Reservation System" has been designed to automate the railway process for ticket reservation and back-office activities. Because of this, the workload of the employees can be significantly reduced. It includes modules required to operate the railway reservation process correctly successfully.
When Passenger wants to book a ticket for his destination, he may have to Select what type of reservation he needs. We have six reservation classes for now. They are Sleepets, Observation Saloon, A/C special, General 1st Class, General 2nd Class, General 3rd Class. Sleepets Class has three subclasses Cabin 1st Class, Seat 2nd Class and Seat 3rd Class. After that, he needs to pick train time, destination and where, and how many tickets he will reserve. Then the system will show is there any train available at that time. If the train is available, Passenger can reserve seats for him and his other participants if they provide a graphical interface that will remain on the train. Here It will show how much money will have to Pay for those reserved tickets. Then Passenger can select the seats and proceed to fill their Details.
In the Personal information section system will give a form to fill, in that form passenger has to fill his Full Name(required), Permanent Address, NIC number(required), Country, Contact-Number(required) and E-mail. After that, if he reserved more than one ticket, he needs to give personal info about other passengers form, including Full name, Age, and NIC numbers. (children NIC not required). About his participants travel with him.
After Filling All the Details, Passenger needs to choose the payment method. We currently have four payment methods, Master Card, Visa, EZ Cash, M cash. After that, he needs to fill card details and proceed to payment. The system will issue a printed ticket pdf for customer with a QR code, and Passenger will have to download the ticket.
Suppose a passenger needs to Change the booked the date of a ticket. In that case, he has to call the hotline and change the date or fill a form about his details Later, that verification message will appear on his phone, after that code entered into the system, the date can be postponed for his desired date. These two methods only succeed only if he does this within two days.
Next, when Passenger wants to view his reservation,System Will sent a verification mail to passenger with code and he need to enter that code in system to proceed. He can view his currently reserved seat information in the system.
Suppose a passenger needs to Cancel a booked ticket. In that case, he has to call the hotline and cancel the ticket or fill a form about his details, Later that verification message will appear on his phone, after that code entered into the system, the ticket can be cancelled within two days.
Another user who uses this system is Train Master; He needs to use his provided username and password to log in. After that, he can download the reserved tickets from the system.
Train Admin Master need to use his provided username and password to login the system. He can handle the train information like Updating train times, Ticket prices adding or removing trains. Also, he can Generate a payment summary report for the tickets sold. Also, when a passenger calls a hotline and asks to change a ticket date or cancel a ticket, he has to go trough the system and make sure that Passenger is valid Passenger or not. In this time Admin Master ask personal information of Passenger. Then Train Admin will look into the ticket's date issued, whether passenger changing date within two days or no. After validating all the information, Admin Master will change the date or cancel the ticket for the customer.

## Module Descriptions
 
### Module Name :- Seat Allocation, modification and cancellation (Ujitha Darshana)
### Description
  Responsible for All Ticket allocation, cancellation, Seat allocation and modification. Maintain a Ticket booking and Seat related information in the data base.After Customer     book a seat the seat will only reserved him or her. Also If any case he or she can withdraw or modify to book his seat. 
    
### Module Name :- Train Master and Station Master Module (Thilanka Randula)
### Description
  The Train Master module is responsible for updating all train details (arrival and departure times), updating emergency train delay and cancellation. The Station Master module   can also collect data previously entered and produce reports per journey on all reserved railway tickets. In this segment, looking for simple train ticket information           management
  
### Module Name :- Ticket Generation and Payment Module (Fathima Munsira)
### Description
  A passenger filling out a form and booking a ticket.Maintaining all passenger related information in the database. UX-UI for a passenger to complete the form and to pay for     the ticket by debit / credit card(payment methods) . Issuance of tickets and QR code as PDF file to passengers after payment for tickets.
  
### Module Name :- Train time table and Generate ticket price (Tharaka Nalinda)
### Description
 displayed the train schedule. and line description and train departure time and arrival time, starting point, and destination are displayed. It also displays ticket prices according to the train classes He or she wants to travel on. When the system gives the passenger the starting point and the destination and the expected time of the departure, the Train will display the approximate time. Also displays the ticket price according to the train class type.
  
