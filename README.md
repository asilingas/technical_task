
Situation is: you have a ReportHandlerCommand which generates various reports about user
activity, payments, etc.
Handler itself does not generate reports. It only executes generators. Each generator creates
different reports. For example UserActivityReportGenerator generates report based on user
activity, UserPaymentsReportGenerator generates report about payments, made by users, etc.

You get the idea, right?

Your job is to write 3 classes:
1. ReportHandlerCommand

a. Command name should be report:handler

b. You must pass one mandatory argument report_generator_name like
user_activity

c. Handler by given argument should execute relevant generator’s method
generate()

2. UserActivityReportGenerator

a. Class must contain single method generate() which outputs following text “User
Activity Generator” when executed

3. UserPaymentsReportGenerator

a. Class must contain single method generate() which outputs following text “User
Payments Parser” when executed


Requirements:

1. Method generate() is mandatory. Make sure each generator implements it.

2. Generators are not Symfony Commands.

3. Handler should know automatically about new generators. You cannot pass generators
to Handler’s __construct() method

4. Use Symfony 3.4

5. Use tags
    
    
Desired example:

bin/console report:handler user_activity should output User Activity Generator
bin/console report:handler user_payments should output User Payments Generator

Good luck!
