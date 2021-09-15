
# The Adapter design pattern                                 

The strategy is a design pattern that allows us to perform different operations with a single object.

It is often used to make existing classes work with others without modifying their source code.

## Advantages of strategy                                        

- Better readability of the code.
- Avoid violating a SOLID principle.
- But first of all to define several dynamically interchangeable algorithms.

The only downside of this patters is that it requires adding a class.


## Pay for an item with multiple payment methods example explained    


Let's take a concrete example: you are browsing an e-commerce site of your choice. An article interests you, you want to buy it: you add it to the basket.

You open your shopping cart, and there, the site asks you to perform the abstract action of "paying". 

It does not seem abstract to you, because you would have ideas of implementations? Do you have only one idea of how to implement this method?

## Solution

- We start with the Strategy interface, which implements the method (s) that will change.

- Then we implement the two classes that will implement it




#### Links :

- https://www.codingame.com/playgrounds/10741/design-pattern-strategy/presentation
- https://www.codingame.com/playgrounds/10741/design-pattern-strategy/exemple


###### NAY_
