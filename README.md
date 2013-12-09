DebtKit API
=======

The DebtKit API allows third-party websites and applications to integrate with the Leads module. This means developers can import leads into DebtKit and retrieve a list of leads currently stored in the system. This is a REST-based API that uses JSON for serialization.

## Making A Request ##

All URLs start with https://api.debtkit.co.uk/v1/. **SSL only**. The path is prefixed with the API version. If we change the API in backward-incompatible ways, we'll bump the version marker and maintain stable support for the old URLs.

To access different DebtKit modules and functions, you will be required to append the URL with the appropriate endpoint. For example, to create a new lead in the system the URL would be `https://api.debtkit.co.uk/v1/leads/create.json`

## Authentication ##

A DebtKit Account ID and API Key is required to authenticate your request. This information can be recieved by signing into DebtKit as an administrator and going to Options->API. 

This data is then POSTed as part of the API request.

## No XML, just JSON ##

We only support JSON for serialization of data. **All API URLs end in .json to indicate that they accept and return JSON.**

## API Endpoints ##

[https://github.com/zeavouk/DebtKit-API/tree/master/leads](Leads)

## Support ##

For developer support, email us at support@zeavo.com or tweet us @DebtKit
