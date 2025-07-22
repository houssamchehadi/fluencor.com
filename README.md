# Fluencor.com

Fluencor.com is a subscription-based influencer platform that lets creators build profiles, live stream, manage subscribers, and get booked for ads. The platform handles payments, takes a percentage of each transaction, and provides tools for both influencers and agencies to connect.

---

## Table of Contents

- [Features](#features)
- [Tech Stack](#tech-stack)
- [Prerequisites](#prerequisites)
- [Installation](#installation)
- [Configuration](#configuration)
- [Usage](#usage)
- [Folder Structure](#folder-structure)
- [Contributing](#contributing)
- [License](#license)
- [Contact](#contact)

---

## Features

- **Creator Profiles:** Influencers can create and customize their own profiles.
- **Live Streaming:** Built-in support for live broadcasts.
- **Subscriptions:** Users can subscribe to creators for exclusive content.
- **Booking System:** Agencies can browse and book influencers for advertisements.
- **Payment Processing:** Secure payments with platform fee calculations.
- **Admin Panel:** Manage users, influencers, agencies, and transactions.

## Tech Stack

- **Backend:** PHP, Hack
- **Frontend:** HTML, CSS, JavaScript
- **Database:** MySQL

## Prerequisites

- PHP 7.4+ (with extensions: PDO, mbstring, json)
- MySQL 5.7+
- Composer (optional for package management)
- Web server: Apache or Nginx

## Installation

1. **Clone the repository**

   ```bash
   git clone https://github.com/houssamchehadi/fluencor.com.git
   cd fluencor.com
   ```

2. **Install dependencies** (if using Composer)

   ```bash
   composer install
   ```

3. **Set up the database**

   - Create a new MySQL database (e.g. `fluencor_db`).
   - Import the schema from `database/schema.sql`:
     ```bash
     mysql -u your_user -p fluencor_db < database/schema.sql
     ```

## Configuration

1. **Environment file**

   - Copy the example:
     ```bash
     cp .env.example .env
     ```
   - Open `.env` and set your database credentials and any API keys.

2. **Web server**

   - Point your virtual host document root to the project directory.
   - Ensure URL rewriting is enabled if using clean URLs.

## Usage

- **Access the site**: `http://localhost/fluencor.com`
- **Register** as an influencer or agency.
- **Log in** to access dashboard features.
- **Admin**: Go to `/admin` to manage users and transactions.

## Folder Structure

```
fluencor.com/
├─ assets/             # CSS, JS, images
├─ database/           # SQL schema and migrations
├─ controllers/        # (Recommended) Business logic handlers
├─ models/             # (Recommended) Data models
├─ views/              # (Recommended) Template files
├─ public/             # Public entry (index.php)
├─ process_*.php       # Form handlers (login, signup, etc.)
├─ .env.example        # Environment variable template
├─ composer.json       # PHP dependencies
└─ README.md           # This file
```

## Contributing

Contributions are welcome! Please:

1. Fork the repo.
2. Create a feature branch (`git checkout -b feature/foo`).
3. Commit your changes (`git commit -m "Add foo feature"`).
4. Push to the branch (`git push origin feature/foo`).
5. Open a Pull Request.

Please follow coding standards and include tests where applicable.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

## Contact

Created by Houssam Chehadi. For questions or support, open an issue or reach out at [**your-email@example.com**](mailto\:your-email@example.com).

