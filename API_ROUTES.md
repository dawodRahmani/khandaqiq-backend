# Khan Daqiq API Documentation

## Overview

This is the API documentation for the Khan Daqiq backend. The API is built with Laravel and uses RESTful conventions. All API endpoints support standard CRUD operations.

**Base URL:** `/api`

## Common Features

### Language Filtering
All models that have a `language_id` field support filtering by language:
- `?language=1` - Filter by language ID
- `?language=en` - Filter by language code
- `?language=English` - Filter by language name

### Pagination
- `?per_page=15` - Set items per page (default: 15)
- `?all=true` - Get all records without pagination

---

## API Endpoints

### 1. Home Pages
Manage homepage content including slides and about sections.

| Method | Endpoint | Description |
|--------|----------|-------------|
| GET | `/api/home-pages` | List all home pages |
| GET | `/api/home-pages/{id}` | Get a specific home page |
| POST | `/api/home-pages` | Create a new home page |
| PUT/PATCH | `/api/home-pages/{id}` | Update a home page |
| DELETE | `/api/home-pages/{id}` | Delete a home page |

**Fields:**
- `language_id` - Reference to language
- `slide_title_1`, `slide_subtitle_1`, `slide_image_1` - Slide 1 content
- `slide_title_2`, `slide_subtitle_2`, `slide_image_2` - Slide 2 content
- `slide_title_3`, `slide_subtitle_3`, `slide_image_3` - Slide 3 content
- `about_title`, `about_image`, `about_message` - About section
- `sector_message` - Sector message content
- `sort` - Display order

---

### 2. Products

| Method | Endpoint | Description |
|--------|----------|-------------|
| GET | `/api/products` | List all products |
| GET | `/api/products/{id}` | Get a specific product |
| POST | `/api/products` | Create a new product |
| PUT/PATCH | `/api/products/{id}` | Update a product |
| DELETE | `/api/products/{id}` | Delete a product |

**Fields:**
- `language_id` - Reference to language
- `title` - Product title
- `important` - Mark as important
- `type` - Product type
- `description` - Product description
- `image` - Product image
- `link` - Product link
- `sort` - Display order

---

### 3. Product Pages

| Method | Endpoint | Description |
|--------|----------|-------------|
| GET | `/api/product-pages` | List all product pages |
| GET | `/api/product-pages/{id}` | Get a specific product page |
| POST | `/api/product-pages` | Create a new product page |
| PUT/PATCH | `/api/product-pages/{id}` | Update a product page |
| DELETE | `/api/product-pages/{id}` | Delete a product page |

**Fields:**
- `language_id` - Reference to language
- `slide_title_1`, `slide_subtitle_1`, `slide_image_1` - Slide 1 content
- `slide_title_2`, `slide_subtitle_2`, `slide_image_2` - Slide 2 content
- `slide_title_3`, `slide_subtitle_3`, `slide_image_3` - Slide 3 content
- `sort` - Display order

---

### 4. News

| Method | Endpoint | Description |
|--------|----------|-------------|
| GET | `/api/news` | List all news |
| GET | `/api/news/{id}` | Get a specific news item |
| POST | `/api/news` | Create a news item |
| PUT/PATCH | `/api/news/{id}` | Update a news item |
| DELETE | `/api/news/{id}` | Delete a news item |

**Fields:**
- `language_id` - Reference to language
- `title` - News title
- `new` - News content
- `important` - Mark as important
- `image` - News image
- `link` - News link
- `date` - Publication date
- `sort` - Display order

---

### 5. News Pages

| Method | Endpoint | Description |
|--------|----------|-------------|
| GET | `/api/news-pages` | List all news pages |
| GET | `/api/news-pages/{id}` | Get a specific news page |
| POST | `/api/news-pages` | Create a new news page |
| PUT/PATCH | `/api/news-pages/{id}` | Update a news page |
| DELETE | `/api/news-pages/{id}` | Delete a news page |

**Fields:**
- `language_id` - Reference to language
- `slide_title_1`, `slide_subtitle_1`, `slide_image_1` - Slide 1 content
- `slide_title_2`, `slide_subtitle_2`, `slide_image_2` - Slide 2 content
- `slide_title_3`, `slide_subtitle_3`, `slide_image_3` - Slide 3 content
- `sort` - Display order

---

### 6. Services

| Method | Endpoint | Description |
|--------|----------|-------------|
| GET | `/api/services` | List all services |
| GET | `/api/services/{id}` | Get a specific service |
| POST | `/api/services` | Create a service |
| PUT/PATCH | `/api/services/{id}` | Update a service |
| DELETE | `/api/services/{id}` | Delete a service |

**Fields:**
- `language_id` - Reference to language
- `title` - Service title
- `important` - Mark as important
- `description` - Service description
- `image` - Service image
- `phone` - Contact phone
- `email` - Contact email
- `sort` - Display order

---

### 7. Service Pages

| Method | Endpoint | Description |
|--------|----------|-------------|
| GET | `/api/service-pages` | List all service pages |
| GET | `/api/service-pages/{id}` | Get a specific service page |
| POST | `/api/service-pages` | Create a service page |
| PUT/PATCH | `/api/service-pages/{id}` | Update a service page |
| DELETE | `/api/service-pages/{id}` | Delete a service page |

**Fields:**
- `language_id` - Reference to language
- `slide_title_1`, `slide_subtitle_1`, `slide_image_1` - Slide 1 content
- `slide_title_2`, `slide_subtitle_2`, `slide_image_2` - Slide 2 content
- `slide_title_3`, `slide_subtitle_3`, `slide_image_3` - Slide 3 content
- `sort` - Display order

---

### 8. Mining Pages

| Method | Endpoint | Description |
|--------|----------|-------------|
| GET | `/api/mining-pages` | List all mining pages |
| GET | `/api/mining-pages/{id}` | Get a specific mining page |
| POST | `/api/mining-pages` | Create a mining page |
| PUT/PATCH | `/api/mining-pages/{id}` | Update a mining page |
| DELETE | `/api/mining-pages/{id}` | Delete a mining page |

**Fields:**
- `language_id` - Reference to language
- `slide_title_1`, `slide_subtitle_1`, `slide_image_1` - Slide 1 content
- `slide_title_2`, `slide_subtitle_2`, `slide_image_2` - Slide 2 content
- `slide_title_3`, `slide_subtitle_3`, `slide_image_3` - Slide 3 content
- `about_title`, `about_image`, `about_message` - About section
- `operations_message` - Operations message
- `sort` - Display order

---

### 9. Mining Operations

| Method | Endpoint | Description |
|--------|----------|-------------|
| GET | `/api/mining-operations` | List all mining operations |
| GET | `/api/mining-operations/{id}` | Get a specific mining operation |
| POST | `/api/mining-operations` | Create a mining operation |
| PUT/PATCH | `/api/mining-operations/{id}` | Update a mining operation |
| DELETE | `/api/mining-operations/{id}` | Delete a mining operation |

**Fields:**
- `language_id` - Reference to language
- `title` - Operation title
- `important` - Mark as important
- `description` - Operation description
- `image` - Operation image
- `sort` - Display order

---

### 10. Mining Projects

| Method | Endpoint | Description |
|--------|----------|-------------|
| GET | `/api/mining-projects` | List all mining projects |
| GET | `/api/mining-projects/{id}` | Get a specific mining project |
| POST | `/api/mining-projects` | Create a mining project |
| PUT/PATCH | `/api/mining-projects/{id}` | Update a mining project |
| DELETE | `/api/mining-projects/{id}` | Delete a mining project |

**Fields:**
- `language_id` - Reference to language
- `title` - Project title
- `description` - Project description
- `state` - Project state/status
- `image` - Project image
- `sort` - Display order

---

### 11. Agriculture Pages

| Method | Endpoint | Description |
|--------|----------|-------------|
| GET | `/api/agriculture-pages` | List all agriculture pages |
| GET | `/api/agriculture-pages/{id}` | Get a specific agriculture page |
| POST | `/api/agriculture-pages` | Create an agriculture page |
| PUT/PATCH | `/api/agriculture-pages/{id}` | Update an agriculture page |
| DELETE | `/api/agriculture-pages/{id}` | Delete an agriculture page |

**Fields:**
- `language_id` - Reference to language
- `slide_title_1`, `slide_subtitle_1`, `slide_image_1` - Slide 1 content
- `slide_title_2`, `slide_subtitle_2`, `slide_image_2` - Slide 2 content
- `slide_title_3`, `slide_subtitle_3`, `slide_image_3` - Slide 3 content
- `about_title`, `about_image`, `about_message` - About section
- `oprations_message` - Operations message
- `sort` - Display order

---

### 12. Agriculture Operations

| Method | Endpoint | Description |
|--------|----------|-------------|
| GET | `/api/agriculture-operations` | List all agriculture operations |
| GET | `/api/agriculture-operations/{id}` | Get a specific agriculture operation |
| POST | `/api/agriculture-operations` | Create an agriculture operation |
| PUT/PATCH | `/api/agriculture-operations/{id}` | Update an agriculture operation |
| DELETE | `/api/agriculture-operations/{id}` | Delete an agriculture operation |

**Fields:**
- `language_id` - Reference to language
- `title` - Operation title
- `important` - Mark as important
- `description` - Operation description
- `image` - Operation image
- `sort` - Display order

---

### 13. Logistic Pages

| Method | Endpoint | Description |
|--------|----------|-------------|
| GET | `/api/logistic-pages` | List all logistic pages |
| GET | `/api/logistic-pages/{id}` | Get a specific logistic page |
| POST | `/api/logistic-pages` | Create a logistic page |
| PUT/PATCH | `/api/logistic-pages/{id}` | Update a logistic page |
| DELETE | `/api/logistic-pages/{id}` | Delete a logistic page |

**Fields:**
- `language_id` - Reference to language
- `slide_title_1`, `slide_subtitle_1`, `slide_image_1` - Slide 1 content
- `slide_title_2`, `slide_subtitle_2`, `slide_image_2` - Slide 2 content
- `slide_title_3`, `slide_subtitle_3`, `slide_image_3` - Slide 3 content
- `about_title`, `about_image`, `about_message` - About section
- `operations_message` - Operations message
- `sort` - Display order

---

### 14. Logistic Operations

| Method | Endpoint | Description |
|--------|----------|-------------|
| GET | `/api/logistic-operations` | List all logistic operations |
| GET | `/api/logistic-operations/{id}` | Get a specific logistic operation |
| POST | `/api/logistic-operations` | Create a logistic operation |
| PUT/PATCH | `/api/logistic-operations/{id}` | Update a logistic operation |
| DELETE | `/api/logistic-operations/{id}` | Delete a logistic operation |

**Fields:**
- `language_id` - Reference to language
- `title` - Operation title
- `importend` - Mark as important
- `description` - Operation description
- `image` - Operation image
- `sort` - Display order

---

### 15. Investment Pages

| Method | Endpoint | Description |
|--------|----------|-------------|
| GET | `/api/investment-pages` | List all investment pages |
| GET | `/api/investment-pages/{id}` | Get a specific investment page |
| POST | `/api/investment-pages` | Create an investment page |
| PUT/PATCH | `/api/investment-pages/{id}` | Update an investment page |
| DELETE | `/api/investment-pages/{id}` | Delete an investment page |

**Fields:**
- `language_id` - Reference to language
- `slide_title_1`, `slide_subtitle_1`, `slide_image_1` - Slide 1 content
- `slide_title_2`, `slide_subtitle_2`, `slide_image_2` - Slide 2 content
- `slide_title_3`, `slide_subtitle_3`, `slide_image_3` - Slide 3 content
- `about_title`, `about_image`, `about_message` - About section
- `operations_message` - Operations message
- `sort` - Display order

---

### 16. Investment Operations

| Method | Endpoint | Description |
|--------|----------|-------------|
| GET | `/api/investment-operations` | List all investment operations |
| GET | `/api/investment-operations/{id}` | Get a specific investment operation |
| POST | `/api/investment-operations` | Create an investment operation |
| PUT/PATCH | `/api/investment-operations/{id}` | Update an investment operation |
| DELETE | `/api/investment-operations/{id}` | Delete an investment operation |

**Fields:**
- `language_id` - Reference to language
- `title` - Operation title
- `important` - Mark as important
- `description` - Operation description
- `image` - Operation image
- `sort` - Display order

---

### 17. Petroleum Pages

| Method | Endpoint | Description |
|--------|----------|-------------|
| GET | `/api/petroleum-pages` | List all petroleum pages |
| GET | `/api/petroleum-pages/{id}` | Get a specific petroleum page |
| POST | `/api/petroleum-pages` | Create a petroleum page |
| PUT/PATCH | `/api/petroleum-pages/{id}` | Update a petroleum page |
| DELETE | `/api/petroleum-pages/{id}` | Delete a petroleum page |

**Fields:**
- `language_id` - Reference to language
- `slide_title_1`, `slide_subtitle_1`, `slide_image_1` - Slide 1 content
- `slide_title_2`, `slide_subtitle_2`, `slide_image_2` - Slide 2 content
- `slide_title_3`, `slide_subtitle_3`, `slide_image_3` - Slide 3 content
- `about_title`, `about_image`, `about_message` - About section
- `operations_message` - Operations message
- `sort` - Display order

---

### 18. Petroleum Operations

| Method | Endpoint | Description |
|--------|----------|-------------|
| GET | `/api/petroleum-operations` | List all petroleum operations |
| GET | `/api/petroleum-operations/{id}` | Get a specific petroleum operation |
| POST | `/api/petroleum-operations` | Create a petroleum operation |
| PUT/PATCH | `/api/petroleum-operations/{id}` | Update a petroleum operation |
| DELETE | `/api/petroleum-operations/{id}` | Delete a petroleum operation |

**Fields:**
- `language_id` - Reference to language
- `title` - Operation title
- `important` - Mark as important
- `description` - Operation description
- `image` - Operation image
- `sort` - Display order

---

### 19. Gallery Pages

| Method | Endpoint | Description |
|--------|----------|-------------|
| GET | `/api/gallery-pages` | List all gallery pages |
| GET | `/api/gallery-pages/{id}` | Get a specific gallery page |
| POST | `/api/gallery-pages` | Create a gallery page |
| PUT/PATCH | `/api/gallery-pages/{id}` | Update a gallery page |
| DELETE | `/api/gallery-pages/{id}` | Delete a gallery page |

**Fields:**
- `language_id` - Reference to language
- `slide_title_1`, `slide_subtitle_1`, `slide_image_1` - Slide 1 content
- `slide_title_2`, `slide_subtitle_2`, `slide_image_2` - Slide 2 content
- `slide_title_3`, `slide_subtitle_3`, `slide_image_3` - Slide 3 content
- `sort` - Display order

---

### 20. Snapshots

| Method | Endpoint | Description |
|--------|----------|-------------|
| GET | `/api/snapshots` | List all snapshots |
| GET | `/api/snapshots/{id}` | Get a specific snapshot |
| POST | `/api/snapshots` | Create a snapshot |
| PUT/PATCH | `/api/snapshots/{id}` | Update a snapshot |
| DELETE | `/api/snapshots/{id}` | Delete a snapshot |

**Fields:**
- `language_id` - Reference to language
- `title` - Snapshot title
- `important` - Mark as important
- `description` - Snapshot description
- `image` - Snapshot image
- `link` - Snapshot link
- `sort` - Display order

---

### 21. HR Pages

| Method | Endpoint | Description |
|--------|----------|-------------|
| GET | `/api/hr-pages` | List all HR pages |
| GET | `/api/hr-pages/{id}` | Get a specific HR page |
| POST | `/api/hr-pages` | Create an HR page |
| PUT/PATCH | `/api/hr-pages/{id}` | Update an HR page |
| DELETE | `/api/hr-pages/{id}` | Delete an HR page |

**Fields:**
- `language_id` - Reference to language
- `slide_title_1`, `slide_subtitle_1`, `slide_image_1` - Slide 1 content
- `slide_title_2`, `slide_subtitle_2`, `slide_image_2` - Slide 2 content
- `slide_title_3`, `slide_subtitle_3`, `slide_image_3` - Slide 3 content
- `sort` - Display order

---

### 22. Collaborators

| Method | Endpoint | Description |
|--------|----------|-------------|
| GET | `/api/collaborators` | List all collaborators |
| GET | `/api/collaborators/{id}` | Get a specific collaborator |
| POST | `/api/collaborators` | Create a collaborator |
| PUT/PATCH | `/api/collaborators/{id}` | Update a collaborator |
| DELETE | `/api/collaborators/{id}` | Delete a collaborator |

**Fields:**
- `language_id` - Reference to language
- `full_name` - Full name
- `important` - Mark as important
- `description` - Description
- `image` - Profile image
- `grade` - Grade/Level
- `position` - Job position
- `phone` - Phone number
- `email` - Email address
- `sort` - Display order

---

### 23. Contact Us Pages

| Method | Endpoint | Description |
|--------|----------|-------------|
| GET | `/api/contact-us-pages` | List all contact us pages |
| GET | `/api/contact-us-pages/{id}` | Get a specific contact us page |
| POST | `/api/contact-us-pages` | Create a contact us page |
| PUT/PATCH | `/api/contact-us-pages/{id}` | Update a contact us page |
| DELETE | `/api/contact-us-pages/{id}` | Delete a contact us page |

**Fields:**
- `language_id` - Reference to language
- `slide_title_1`, `slide_subtitle_1`, `slide_image_1` - Slide 1 content
- `slide_title_2`, `slide_subtitle_2`, `slide_image_2` - Slide 2 content
- `slide_title_3`, `slide_subtitle_3`, `slide_image_3` - Slide 3 content
- `sort` - Display order

---

### 24. Contact Ways

| Method | Endpoint | Description |
|--------|----------|-------------|
| GET | `/api/contact-ways` | List all contact ways |
| GET | `/api/contact-ways/{id}` | Get a specific contact way |
| POST | `/api/contact-ways` | Create a contact way |
| PUT/PATCH | `/api/contact-ways/{id}` | Update a contact way |
| DELETE | `/api/contact-ways/{id}` | Delete a contact way |

**Fields:**
- `language_id` - Reference to language
- `title` - Title
- `address` - Address
- `email_1` - Primary email
- `email_2` - Secondary email
- `phone_1` - Primary phone
- `phone_2` - Secondary phone

---

### 25. Location Maps

| Method | Endpoint | Description |
|--------|----------|-------------|
| GET | `/api/location-maps` | List all location maps |
| GET | `/api/location-maps/{id}` | Get a specific location map |
| POST | `/api/location-maps` | Create a location map |
| PUT/PATCH | `/api/location-maps/{id}` | Update a location map |
| DELETE | `/api/location-maps/{id}` | Delete a location map |

**Fields:**
- `title` - Location title
- `address` - Location address
- `latitude` - GPS latitude (float)
- `longitude` - GPS longitude (float)
- `is_active` - Active status (boolean)

---

### 26. Follow Us

| Method | Endpoint | Description |
|--------|----------|-------------|
| GET | `/api/follow-us` | List all follow us records |
| GET | `/api/follow-us/{id}` | Get a specific follow us record |
| POST | `/api/follow-us` | Create a follow us record |
| PUT/PATCH | `/api/follow-us/{id}` | Update a follow us record |
| DELETE | `/api/follow-us/{id}` | Delete a follow us record |

**Fields:**
- `instagram_link` - Instagram URL
- `facebook_link` - Facebook URL
- `youtube_link` - YouTube URL
- `is_active` - Active status

> **Note:** Only one FollowUs record is allowed in the system.

---

### 27. Quick Access

| Method | Endpoint | Description |
|--------|----------|-------------|
| GET | `/api/quick-access` | List all quick access links |
| GET | `/api/quick-access/{id}` | Get a specific quick access link |
| POST | `/api/quick-access` | Create a quick access link |
| PUT/PATCH | `/api/quick-access/{id}` | Update a quick access link |
| DELETE | `/api/quick-access/{id}` | Delete a quick access link |

**Fields:**
- `link` - Quick access link URL

---

## Database Schema Summary

### Tables Created:
1. `users` - User accounts
2. `cache` - Cache storage
3. `jobs` - Queue jobs
4. `languages` - Multi-language support
5. `news_pages` - News page configuration
6. `news` - News items
7. `product_pages` - Product page configuration
8. `products` - Products
9. `mining_pages` - Mining section page
10. `mining_operations` - Mining operations
11. `mining_projects` - Mining projects
12. `logistic_pages` - Logistics page
13. `logistic_operations` - Logistics operations
14. `investment_pages` - Investment page
15. `investment_operations` - Investment operations
16. `agriculture_pages` - Agriculture page
17. `agriculture_operations` - Agriculture operations
18. `petroleum_pages` - Petroleum page
19. `petroleum_operations` - Petroleum operations
20. `service_pages` - Services page
21. `services` - Services
22. `hr_pages` - HR page
23. `collaborators` - Team members/collaborators
24. `gallery_pages` - Gallery page
25. `snapshots` - Gallery snapshots
26. `contact_us_pages` - Contact page
27. `location_maps` - Office locations
28. `contact_ways` - Contact information
29. `home_pages` - Homepage content
30. `follow_us` - Social media links
31. `partner_ship` - Partnership info
32. `quick_access` - Quick access links

---

## Admin Panel

The application includes a Filament admin panel for managing all content. Access it at `/admin`.

### Available Resources:
- Agriculture Operations
- Agriculture Pages
- Collaborators
- Contact Us Pages
- Contact Ways
- Follow Us
- Gallery Pages
- Home Pages
- HR Pages
- Investment Operations
- Investment Pages
- Logistic Operations
- Logistic Pages
- Location Maps
- Mining Operations
- Mining Pages
- Mining Projects
- News
- News Pages
- Petroleum Operations
- Petroleum Pages
- Products
- Product Pages
- Quick Access
- Services
- Service Pages
- Snapshots

---

## Response Format

### Success Response (List)
```json
{
  "current_page": 1,
  "data": [...],
  "first_page_url": "...",
  "from": 1,
  "last_page": 1,
  "last_page_url": "...",
  "links": [...],
  "next_page_url": null,
  "path": "...",
  "per_page": 15,
  "prev_page_url": null,
  "to": 10,
  "total": 10
}
```

### Success Response (Single)
```json
{
  "id": 1,
  "language_id": 1,
  "title": "...",
  "created_at": "2025-11-26T00:00:00.000000Z",
  "updated_at": "2025-11-26T00:00:00.000000Z"
}
```

### Error Response
```json
{
  "message": "Error message",
  "errors": {
    "field": ["Error description"]
  }
}
```






i have two part front end with react and backend with laravel api and dashboard with fillametn i want you to work on a specific page and make its content dynamic /contact and in the database for it i made 2 Contact Us
connect way

 there is a form in the contact us it should be sent to an email info@khandaqiq.com
  add data to databse and make the front end dynamic , note : make a to do list for yourself for better work and ask me anything for better resrult , consider 3 language 
 


there is a table called location maps it has title , Latitude*
, Longitude*,Address, make a seeder for it and according to that it should show the google map at the end of contact us page before footer 

