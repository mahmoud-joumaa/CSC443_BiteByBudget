
# CSC443 Web Project

# Final project delivered to Dr.Gilbert Tekli

# BiteByBudget

## Introduction

We are pleased to provide you with the following proposal intended to deliver the *“BiteByBudget”* website which it

> “finds a bite for every budget”.

In light of the current economic crisis in Lebanon, such a service can help people stay on budget while satisfying their cravings. For this particular project, we have teamed up with 3 supermarkets Siyarafour,Winneys,and Foodies to deliver this service by showing customers where they can find the ingredients in these stores to prep for their selected recipe all at the convenience of their budget.

## Story Book
Every story has its authors, and in this website, we took the role of both developing and being the authors by designing the story which in our case is BiteByBudget from scratch and bringing it to life. Below are pictures that display the process of how we visualized BiteByBudget website and its pages from start to finish.

<img width="401" alt="Screenshot 2023-05-08 205157" src="https://github.com/MahmoudJLB/BiteByBudget/assets/125236191/1fe946ef-cd57-44e1-b098-cd14631357fc">
### Fig 1: How the user will be seeing the Homepage on both Mobile and Desktop

<img width="587" alt="Screenshot 2023-05-08 205512" src="https://github.com/MahmoudJLB/BiteByBudget/assets/125236191/cdf37216-f303-4182-a7cb-18135373ccdf">
### Fig 2: How the user will be seeing the About Us page on both Mobile and Desktop

<img width="416" alt="Screenshot 2023-05-08 205708" src="https://github.com/MahmoudJLB/BiteByBudget/assets/125236191/59bed37c-239e-40ae-a229-533420cda6bf">
### Fig 3: How the user will be seeing the Our Partners page on both Mobile and Desktop


<img width="660" alt="Screenshot 2023-05-08 210716" src="https://github.com/MahmoudJLB/BiteByBudget/assets/125236191/91fcbe03-f2b5-4b99-b241-0cb2a28d9e4a">
### Fig 4: How the user will be seeing the Browse Recipes page


## Lastly, the Supermarkets involved in making BiteByBudget come to life:

<img width="461" alt="Screenshot 2023-05-08 212400" src="https://github.com/MahmoudJLB/BiteByBudget/assets/125236191/7ef237ed-0fd7-4f6c-aed5-e1a21cf32be7">


#### Siyarafour which was inspired by Carrefour.


<img width="426" alt="Screenshot 2023-05-08 212313" src="https://github.com/MahmoudJLB/BiteByBudget/assets/125236191/c6f4af99-4fcb-4ad3-bfbd-b2f0dee4cbfa">


#### Foodies which was inspired by Goodies.

<img width="348" alt="Screenshot 2023-05-10 192033" src="https://github.com/MahmoudJLB/BiteByBudget/assets/125236191/e96ee564-29de-44c2-b6f3-c2845e592e76">

####  Winneys which was inspired by Spinneys .

  

## Project Description
The project will involve designing and developing a web application divided in 2 apps (Admin Portal & Client Interface).

### Client
The Client Interface provides a simple interface where the users input their budget, and then select a recipe. Our app will then generate a list of supermarkets where the selected recipe’s ingredients can be found. The list of supermarkets will be sorted primarily according to how many ingredients are available and secondarily by location. A shopping list is then generated so the user can cross out ingredients they buy as they’re shopping.

  

### Admin

As for the Admin Portal, it is designed for two main users:
•App Admins: can manage the recipe catalog (add, edit, or delete recipes)
•Supermarkets: can add ingredients or edit existing ingredients

  

## Database Design

Our database mainly consists of 5 separate relations (or tables)
•Underlined attributes represent the primary ID of an entity.
•Italic attributes represent multivalued attributes of an entity.
(Find the 6 relations briefly discussed on the next page)

### 1.RECIPE
| Recipe_ID | Recipe_Name |Image|
|--|--|--|
|  |  |  |
Each recipe will have its own ID (primary key), name, and an image to visualize the mouthwatering recipe. The relationship between RECIPE and INGREDIENT here is “CONSISTSOF”.

### 2.INGREDIENT

| Ingredient_ID  | Ingredient_Name  |Type|Image
|--|--|--|--|
|  |  |  |  |
Each ingredient will have its own ID (primary key), name, and a type.

  

### 3.SUPERMARKET
| Supermarket_ID   | Supermarket_Name  |Location|Image
|--|--|--|--|
|  |  |  |  |
Each supermarket will have its own ID (primary key), name, location, and image which is the logo of the supermarket. The relationship between SUPERMARKET and INGREDIENT is “SELLS”.

 
### 4.SELLS
|  Supermarket_ID  | Ingredient_ID  |Quantity |Price|Status
|--|--|--|--|--|--|
|  |  |  |  |  |  |
Many supermarkets sell many ingredients. In each supermarket, the quantity, price, and status(that includes if the ingredient is on sale by how much or not) of a certain ingredient is kept track of.

 
### 5.CONSISTSOF
|Recipe_ID  | Ingredient_ID  |Quantity |Unit
|--|--|--|--|
|  |  |  |  |
Many recipes consist of many ingredients. Each recipe consists of a certain quantity of a certain ingredient which is expressed in certain Unit.

  
### 6.USERS
|ID | USERNAME|Pass|IsAdmin
|--|--|--|--|
|  |  |  |  |
This table is many to store the credentials(USERNAME and Pass) of the users(admins and supermarkets) when they want to login ,and an IsAdmin which will decided their privileges and redirect them if they are an admin or a supermarket or an inactive user(0 representing supermarket account and active,1 representing admin and active,and lastly -1 representing an inactive account).

  
## Application Summary:

## Admin Portal (2 types of users):

### Admins:
can manage the recipe catalog (add, edit, or delete recipes in the RECIPE relation)

### Supermarkets:
can access the SELLS relation to add ingredients, or edit the quantity, price, and status of existing ingredients

  
## Client Interface:

### Home Page:
describes the app and provides an overview of the services it provides.

### About Us:
provides insight into the background of the brilliant minds behind BiteByBudget

### Contact Us:
a simple form where the user can submit feedback

### Search Page:
this is where the user will search for their recipes across different supermarkets in Lebanon via a multi-step process.

Step 1: The user inputs their budget.

Step 2: The user selects a recipe from a gallery.

Step 3: The user cancels ingredients they already own.

Step 4: The user selects a supermarket from the generated list. The list is sorted according to the percentage of available ingredients and according to location. The highest percentage appears on top. In case of equal percentages, the closest supermarket appears on top.

Step 5: The app generates a shopping list which the client can use as they’re shopping. The list is saved (via cookies) so that the user can access it until they decide to delete it or they generate a new list

  

## Application Features:

### Responsive:
oDesktop
oMobile (IOS/Android)

### Language Employed:
○English

  

## Future Plans:
In our future versions, we plan to incorporate several new features into our website, some of which are listed below. We are excited to release these updates in the near future and look forward to seeing how our users will utilize these new features.


oUser custom recipe gallery

oCreate custom ingredient shopping list

oKeep track of our site data (statistics / customer satisfaction / most visited / etc...)

oAccount for supermarket locations when sorting (in addition to percentage of available ingredients and total price)
