# CRUD-School_Aplication

## Important: File Structure and Operation

### File Organization
The project files are organized into two main categories:

1. **Back-end Files (`*Op.php`)**
   - Handle server-side functionality
   - Process form submissions
   - Manage database operations
   - Contain server variables and database connections
   - Include SQL table variable definitions (using GET methods)

2. **Front-end Files (without `Op`)**
   - Display user interface elements
   - Contain forms and input fields
   - Handle screen display
   - Manage user interactions

### Operation Flow
1. Users interact with front-end forms
2. Form submissions trigger corresponding back-end files
3. Data is processed and saved to the database
4. System provides feedback messages
5. Users are redirected as appropriate

### Technical Implementation
Each back-end file follows this structure:
```php
try {
    // Database connection attempt
    // If successful:
    //   - Operation is executed
    //   - Success message is displayed
} catch {
    // If connection fails:
    //   - Error message is displayed
    //   - Operation is aborted
}
```

### Database Integration
- Back-end files define and use server-side variables
- Database connections are managed through try-catch blocks
- SQL table variables are retrieved using GET methods
- Operations are only executed upon successful database connection
