DebtKit API
=======

The DebtKit API allows third-party websites and applications to integrate with the DebtKit platform. This means developers can read and write data to DebtKit. This is an API that uses JSON for serialization.

## Making A Request ##

All URLs start with https://api.debtkit.co.uk/v1/. **SSL only**. The path is prefixed with the API version. If we change the API in backward-incompatible ways, we'll bump the version marker and maintain stable support for the old URLs.

To access different DebtKit modules and functions, you will be required to append the URL with the appropriate endpoint. For example, to create a new customer in the system the URL would be `https://api.debtkit.co.uk/v1/customers/create.json`

## Authentication ##

A DebtKit API Key is required to authenticate your request. API Keys can be created and retrieved by signing into your DebtKit account and going to Options->API Keys. 

This data is then POSTed as part of the API request.

## No XML, just JSON ##

We only support JSON for serialization of data. **All API URLs end in .json to indicate that they accept and return JSON.**

## API Endpoints ##

* [Comments](https://github.com/zeavouk/DebtKit-API/tree/master/comments)
* [Customers](https://github.com/zeavouk/DebtKit-API/tree/master/customers)
* [Files](https://github.com/zeavouk/DebtKit-API/tree/master/files)
* [Messages](https://github.com/zeavouk/DebtKit-API/tree/master/messages)
* [Reports](https://github.com/zeavouk/DebtKit-API/tree/master/reports)
* [Tasks](https://github.com/zeavouk/DebtKit-API/tree/master/tasks)

## Support ##

For developer support, email us at [support@zeavo.com](mailto:support@zeavo.com) or tweet us [@DebtKit](https://twitter.com/DebtKit)
