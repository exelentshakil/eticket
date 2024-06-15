# 🚆 Train Ticketing System 🚉

## Overview 📝

The Train Ticketing System is a comprehensive web application designed to facilitate the booking of train tickets. It enables users to search for trains, view details, select seats, and book tickets efficiently. Built using Laravel for the backend and Vue.js for the frontend, this system provides a seamless user experience.

## Features 🌟

### User Features 👥

- **Train Search 🔍**: Users can search for trains by specifying the departure and arrival cities, journey date, and class type.
- **Train Details 📄**: View detailed information about trains, including schedules, routes, and available classes.
- **Seat Selection 🪑**: Visual seat layout allows users to select their preferred seats.
- **Real-time Availability ⏱️**: Seat availability is updated in real-time to prevent double booking.
- **Booking Confirmation ✅**: Users receive confirmation upon successful booking of seats.
- **User Authentication 🔒**: Secure login and registration for users to manage their bookings and personal information.

### Admin Features 🛠️

- **Train Management 🚆**: Admins can add, update, or delete train information.
- **Route Management 📍**: Manage routes including departure and arrival times and cities.
- **Schedule Management 📅**: Set and manage train schedules for different days of the week.
- **Seat Layout Management 📐**: Define and manage seat layouts for different classes and floors.
- **Booking Management 📋**: View and manage all bookings made by users.

## Benefits 🎁

- **Convenience 🛋️**: Users can easily book train tickets from the comfort of their homes.
- **Efficiency ⚡**: Streamlined booking process reduces the time and effort needed to book a ticket.
- **Real-time Updates 📡**: Users receive real-time updates on seat availability and booking status.
- **Secure Transactions 🔐**: Secure user authentication and data protection measures ensure user information is safe.
- **User-friendly Interface 🖥️**: Intuitive and responsive interface makes the booking process straightforward.

## Installation 🛠️

### Backend (Laravel) 🐘

1. **Clone the repository**:
    ```bash
    git clone https://github.com/yourusername/train-ticketing-system.git
    cd train-ticketing-system
    ```

2. **Install dependencies**:
    ```bash
    composer install
    ```

3. **Set up environment variables**:
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

4. **Configure database**:
   Update your database credentials in the `.env` file.

5. **Run migrations and seeders**:
    ```bash
    php artisan migrate --seed
    ```

6. **Start the server**:
    ```bash
    php artisan serve
    ```

### Frontend (Vue.js) 🖼️

1. **Navigate to the frontend directory**:
    ```bash
    cd train-ticketing-frontend
    ```

2. **Install dependencies**:
    ```bash
    npm install
    ```

3. **Run the development server**:
    ```bash
    npm run serve
    ```

## Usage 🚀

1. **Search for Trains 🔍**:
    - Navigate to the home page.
    - Enter departure and arrival cities, journey date, and class type.
    - Click on the search button to view available trains.

2. **View Train Details 📝**:
    - Click on a train from the search results to view detailed information.

3. **Select and Book Seats 🪑**:
    - Choose your preferred seat from the available options.
    - Click on the book button to confirm your booking.

## Contributing 🤝

Contributions are welcome! Please read the [CONTRIBUTING.md](CONTRIBUTING.md) for guidelines.

## License 📄

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

## Contact 📧

For any inquiries or support, please contact us at [sahmed@heartcoregrowth.com](mailto:sahmed@heartcoregrowth.com).

---

Thank you for using the Train Ticketing System! 🎉
