@extends('layouts.cpp_app')

@section('title', 'Encapsulation & Abstraction in C++')

@section('content')

<header>
    <div class="container">
        <h1>Encapsulation & Abstraction in C++</h1>
        <p class="lead">Understand the differences between Encapsulation and Abstraction with detailed examples and explanations.</p>
         <div class="container" style="display: flex; justify-content: center; margin-bottom: 20px;">
          <iframe width="650" height="335" src="https://www.youtube.com/embed/Ksi7hNouJdM?si=OhOrBs7dj0wNwWLT" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    </div>
</header>

<main class="container">
    <div class="grid">

        <!-- Section 1: Introduction -->
        <section class="card">
            <h2>Introduction</h2>
            <p>
                Encapsulation and Abstraction are two fundamental pillars of Object-Oriented Programming (OOP).  
                They both deal with **hiding data and complexity**, but they are not the same thing.
            </p>
            <ul>
                <li><strong>Encapsulation:</strong> Bundling data and methods together in a class and controlling access using access specifiers like <code>private</code>, <code>public</code>, and <code>protected</code>.</li>
                <li><strong>Abstraction:</strong> Hiding implementation details and exposing only essential features to the user.</li>
            </ul>
        </section>

        <!-- Section 2: Encapsulation -->
        <section class="card">
            <h2>Encapsulation in C++</h2>
            <p>
                **Encapsulation** is like a protective shield that prevents direct access to data members.
                Instead of directly modifying the data, we use methods like <strong>getters</strong> and <strong>setters</strong>.
            </p>
            <p><strong>Real-life example:</strong> A bank account system hides the balance from direct access and provides deposit/withdraw functions to interact with it.</p>

            <div class="code">
<pre>
#include &lt;iostream&gt;
using namespace std;

class BankAccount {
private:
    float balance; // private data

public:
    BankAccount(float initialBalance) {
        balance = initialBalance;
    }

    void deposit(float amount) {
        if (amount > 0) {
            balance += amount;
            cout &lt;&lt; "Deposited: " &lt;&lt; amount &lt;&lt; endl;
        } else {
            cout &lt;&lt; "Invalid deposit amount!" &lt;&lt; endl;
        }
    }

    void withdraw(float amount) {
        if (amount > 0 && amount &lt;= balance) {
            balance -= amount;
            cout &lt;&lt; "Withdrawn: " &lt;&lt; amount &lt;&lt; endl;
        } else {
            cout &lt;&lt; "Insufficient funds!" &lt;&lt; endl;
        }
    }

    float getBalance() {
        return balance;
    }
};

int main() {
    BankAccount account(1000); // initial balance
    account.deposit(500);
    account.withdraw(300);
    cout &lt;&lt; "Current Balance: " &lt;&lt; account.getBalance() &lt;&lt; endl;
    return 0;
}
</pre>
            </div>

            <div class="btn-row">
                <button class="btn" onclick="showOutput('Deposited: 500\nWithdrawn: 300\nCurrent Balance: 1200', 'output-encapsulation')">Run Demo</button>
                <button class="btn secondary" onclick="clearOut('output-encapsulation')">Clear</button>
            </div>
            <div class="out" id="output-encapsulation"></div>
        </section>

        <!-- Section 3: Abstraction -->
        <section class="card">
            <h2>Abstraction in C++</h2>
            <p>
                **Abstraction** focuses on hiding **implementation details** while only showing what is necessary to the user.
            </p>
            <p><strong>Real-life example:</strong> When you use an ATM, you don't know how it internally processes your request. You only see options like "Withdraw", "Deposit", and "Check Balance".</p>

            <div class="code">
<pre>
#include &lt;iostream&gt;
using namespace std;

class ATM {
public:
    virtual void performTransaction() = 0; // pure virtual function
};

class Withdraw : public ATM {
public:
    void performTransaction() override {
        cout &lt;&lt; "Withdrawal Successful!" &lt;&lt; endl;
    }
};

class Deposit : public ATM {
public:
    void performTransaction() override {
        cout &lt;&lt; "Deposit Successful!" &lt;&lt; endl;
    }
};

int main() {
    ATM* transaction;
    
    Withdraw w;
    Deposit d;

    transaction = &w;
    transaction->performTransaction();

    transaction = &d;
    transaction->performTransaction();

    return 0;
}
</pre>
            </div>

            <div class="btn-row">
                <button class="btn" onclick="showOutput('Withdrawal Successful!\nDeposit Successful!', 'output-abstraction')">Run Demo</button>
                <button class="btn secondary" onclick="clearOut('output-abstraction')">Clear</button>
            </div>
            <div class="out" id="output-abstraction"></div>
        </section>

        <!-- Section 4: Encapsulation vs Abstraction Comparison -->
        <section class="card">
            <h2>Encapsulation vs Abstraction</h2>
            <table class="comparison">
                <thead>
                    <tr>
                        <th>Encapsulation</th>
                        <th>Abstraction</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Wraps data and functions into one unit.</td>
                        <td>Shows only essential details to the user.</td>
                    </tr>
                    <tr>
                        <td>Achieved using classes and access specifiers.</td>
                        <td>Achieved using abstract classes and interfaces.</td>
                    </tr>
                    <tr>
                        <td>Focuses on data hiding and protection.</td>
                        <td>Focuses on hiding complexity.</td>
                    </tr>
                    <tr>
                        <td>Example: Private bank balance with deposit/withdraw methods.</td>
                        <td>Example: ATM operations shown without implementation details.</td>
                    </tr>
                </tbody>
            </table>
        </section>

    </div>
</main>

<script>
function showOutput(result, id) {
    document.getElementById(id).innerText = "Output:\n" + result;
}
function clearOut(id) {
    document.getElementById(id).innerText = "";
}
</script>
<div class="d-flex justify-content-between">
        <button class="btn " onclick="window.location='{{ route('cpp_content.class-obj') }}'">&lt;= Previous</button>
        <button class="btn " onclick="window.location='{{ route('cpp_content.inheritance') }}'">Next =&gt;</button>
    </div>


@endsection
