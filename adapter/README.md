
# The Adapter design pattern                                 

The adapter is a design pattern that allows the interface of an existing class to be used from another interface. 

It is often used to make existing classes work with others without modifying their source code.

## Adapter operation                                          

- The adapter takes an interface compatible with one of the existing objects.
- The existing object can call the methods of the adapter via this interface in any security.
- When the adapter receives a call, it passes the request to the second object in a format and in an order he can interpret.


## Insert a square peg into a round hole example explained    

Here is an example of using the Adapter design pattern that solves the classic problem square piece to be inserted into the round hole.

* We have two classes with compatible interfaces
	- RoundHole class and RoundPeg class

* But one class is incompatible
	- SquarePeg

* An adapter class allows SquarePeg to fit into RoundHole. It extends the RoundPeg class to allow adapter objects to behave like RoundPeg.
	- SquarePegAdapter


# NAY_
