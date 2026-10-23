---
marp: true
theme: default
paginate: true
---

# Lab: MVC (Model-View-Controller)

**Discover the MVC principle and understand the roles of Model, View, and Controller in an application**

---

## Plan

1. **Introduction**
2. **Objectives**
3. **What is MVC?**
4. **The Three Components**
5. **How MVC Works (Flow)**
6. **Benefits of MVC**
7. **Real-World Examples**
8. **Practical Exercise**
9. **Conclusion**
10. **References**

---

## 1. Introduction

When building applications, it's easy to mix data, logic, and user interface together. This can quickly become hard to maintain as the project grows.

The **Model-View-Controller (MVC)** pattern solves this problem by separating an application into three distinct parts, following the principle of **separation of concerns**.

---

## 2. Objectives

By the end of this lab, you will be able to:

- Define the MVC architectural pattern.
- Explain the role of the Model, View, and Controller.
- Describe the data flow between the three components.
- Identify the benefits of using MVC.
- Apply the MVC concept to a simple example.

---

## 3. What is MVC?

**MVC** stands for **Model – View – Controller**. It is an architectural design pattern that divides an application into three interconnected components.

The goal is to separate:

- **Data & business logic** (Model)
- **User interface (presentation)** (View)
- **User input & coordination** (Controller)

This separation makes applications more **modular, maintainable, testable, and reusable**.

---

## 4. The Three Components

| Component | Purpose | Responsibilities | Example |
|---|---|---|---|
| **Model** | Data & Business Logic | Manages application state, handles validation, business rules, and data persistence (DB, APIs, files). It knows nothing about the UI. | A `Post` model in a blog app: defines title/content, enforces rules, and saves to a database. |
| **View** | Presentation (UI) | Displays data from the Model to the user. It updates when the Model changes and captures user interactions. It should contain **no business logic**. | An HTML template that renders a list of blog posts or a form to create a post. |
| **Controller** | Input & Coordination | Acts as a bridge between View and Model. It receives user input, calls appropriate Model operations, decides which View to render, and passes the data. | A `PostsController` that handles "Create Post": takes form data, calls `Post.save()`, then returns the updated list view. |

---

## 5. How MVC Works (Flow)

The typical MVC flow is as follows:

1. **User interacts** with the View (clicks a button, submits a form).
2. **View sends input** to the Controller.
3. **Controller processes** the input and calls the appropriate Model method(s).
4. **Model updates state** (performs business logic, reads/writes data).
5. **Controller retrieves updated data** from the Model.
6. **Controller selects a View** and passes the data to it.
7. **View renders** the updated data and presents it back to the user.

**Flow Diagram:** `User → View → Controller → Model → Controller → View → User`

---

## 6. Benefits of MVC

- **Separation of Concerns** – Each component has a clear, single responsibility.
- **Maintainability** – UI changes don't affect business logic, and data logic is isolated.
- **Testability** – Models and Controllers can be unit-tested independently from the UI.
- **Reusability** – Models can be reused across multiple Views (web, mobile, desktop).
- **Scalability** – Easier to extend and organize large applications.
- **Team Collaboration** – Frontend, backend, and data teams can work more independently.

---

## 7. Real-World Examples

| Framework/Platform | Notes |
|---|---|
| **Ruby on Rails** | One of the most well-known MVC web frameworks. |
| **ASP.NET MVC** | Microsoft's MVC implementation for .NET applications. |
| **Spring MVC** | Popular Java framework for building web apps. |
| **Laravel** | PHP framework that follows MVC (with additional layers). |
| **Django** | Uses MTV (Model-Template-View), a close variation of MVC. |

---

## 8. Practical Exercise

**Objective:** Apply MVC logic to a simple blog application.

### Instructions

1. **Identify the Model**
   - What data/entities are needed? (e.g., `Post`, `User`)
   - What business rules apply? (e.g., title cannot be empty)

2. **Identify the View**
   - What screens/UI do we need? (e.g., Post List, Create Post Form, Post Details)

3. **Identify the Controller**
   - What actions happen? (e.g., `index()`, `create()`, `store()`, `show()`)
   - How does it connect View input to Model operations?

### Task

Write down for **"Create a New Blog Post"** the step-by-step MVC flow, clearly stating what happens in **Model**, **View**, and **Controller** at each step.

---

## 9. Conclusion

The **MVC pattern** is a fundamental architectural principle that helps developers build well-structured, organized, and maintainable applications. 

- The **Model** is the heart (data + logic).
- The **View** is what the user sees (presentation).
- The **Controller** is the brain that connects them (coordination).

By enforcing **separation of concerns**, MVC allows you to scale your projects with confidence and clarity.

---

## 10. References

- [Wikipedia – Model–View–Controller](https://en.wikipedia.org/wiki/Model%E2%80%93view%E2%80%93controller)
- [MDN Web Docs – MVC](https://developer.mozilla.org/en-US/docs/Glossary/MVC)
- [Rails Guides – MVC Overview](https://guides.rubyonrails.org/overview.html#the-mvc-pattern)
- [Microsoft Learn – ASP.NET MVC](https://learn.microsoft.com/en-us/aspnet/mvc/)

---