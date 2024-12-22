# VtlSwissKnife Project Goals

## 0. Session Summary

### **New Project Created**
- **Project Name**: Vtl Swiss Knife
    - A new Trongate project for building a dynamic and modular toolset to assist Trongate developers.
- **Module Name**: `vtlsk`
    - The core module within the new project.
    - All tools will reside under this module.
- **File Naming**:
    - Main JavaScript File: `assets/js/vtlsk.js`.
    - Main CSS File: `assets/css/vtlsk.css` (based on TailwindCSS).

### **Purpose**
- The project serves as a **Swiss Army Knife toolset for Trongate developers**, designed to streamline database-related, module-related, and system-level tasks.
- Each tool will be modular, scalable, and easy to integrate within the Trongate framework.

---

## 1. Project Setup and Workflow

### **Initial Setup Plan**
1. **Create Trongate Project**:
    - Start with a fresh Trongate project: **"Vtl Swiss Knife"**.
      - Use the standard Trongate directory structure:
        ```
        app/
        content/
        config.php
        modules/
            welcome/
            vtlsk/                 (Core Module for this project)
                  assets/
                         css/
                             vtlsk.css          (Main Tailwind CSS file)
                         js/
                            vtlsk.js            (Main JavaScript functionality)
                  controllers/
                              Vtlsk.php  (main controller file)
                  views/
                       main.php   (main view)
        ```

2. **Copy Existing Module for Reference**:
    - Import the existing **`vtlgen` module** from its standalone repository into this project as a reference.
    - Place it in the `modules/` directory (e.g., `vtlgen_reference/`), clearly marked as legacy code to guide redevelopment.
    - This module will not be modified but will serve as a reference while creating tools for **`vtlsk`**.

3. **Begin `vtlsk` Development**:
    - Start with a clean `vtlsk` module structure that integrates seamlessly with the backend and frontend:
      ```
      modules/
          vtlsk/
              controllers/Vtlsk.php
              views/
              models/
              assets/
                  js/vtlsk.js
                  css/vtlsk.css
      ```

---

## 2. Purpose and Vision of Vtl Swiss Knife

### **Overall Project Vision**
- Build a **modular, efficient collection of tools for Trongate**.
- Provide developers with tools to:
    1. Manage databases (data, schemas, relationships, etc.).
    2. Generate or remove modules efficiently.
    3. Interact seamlessly with backend and frontend interfaces.
    4. Optimize development processes with a clean UI and robust scripting capabilities.

---

## 3. Key Libraries and Dependencies

### **Core Libraries**
1. **TailwindCSS**:
    - Ensures consistent and responsive design for tools and interfaces.
2. **Tabulator.js**:
    - Enables data tables with advanced features for table-based interactions.
3. **Prism.js**:
    - Used for syntax highlighting (e.g., code previews and SQL query builders).
4. **FakerPHP**:
    - For generating test/fake data to validate tool behaviors and mock data scenarios.
5. **Parsedown**:
    - Markdown parser for dynamic display of documentation or instructions.

---

## 4. Tools Overview

The **`vtlsk` module** will recreate all tools from the `vtlgen` module (listed below) with improvements in scalability, modularity, and error handling.

> **Note**: Every tool listed below is mandatory for development and will exist as part of `vtlsk`.

### **Database Tools**
1. **CreateData**:
    - **Purpose**: Generate fake data for specified database tables.
    - **Improvements**: Add customizable presets and options for localized data generation.
    - **Dependencies**: FakerPHP.

2. **DeleteData**:
    - **Purpose**: Delete data from specific tables (including test/fake data).

3. **BrowseData**:
    - **Purpose**: Display database data in a tabular format.
    - **Dependencies**: Tabulator.js.
    - **Improvements**: Enhance filtering, sorting, and pagination.

4. **CreateIndex**:
    - **Purpose**: Create database indexes to optimize performance.

5. **DeleteIndex**:
    - **Purpose**: Remove specified indexes from the database.

6. **BrowseIndexes**:
    - **Purpose**: List all indexes in the database and their attributes.
    - **Improvements**: Add more detailed metadata visualization.

7. **BrowsePrimaryKeys**:
    - **Purpose**: Display all primary keys for database tables.
    - **Improvements**: Add features to visualize primary key ranges.
    - **Dependencies**: Combine with `BrowseIndexes` in the future for a unified metadata tool.

8. **CreateForeignKey**:
    - **Purpose**: Add foreign key relationships for referential integrity.

9. **DropForeignKey**:
    - **Purpose**: Remove existing foreign key constraints.

10. **BrowseForeignKeys**:
- **Purpose**: View all foreign key relationships in a database.

11. **CreateTable**:
- **Purpose**: Generate new database tables through a visual builder.
- **Dependencies**: Tabulator.js, TailwindCSS.

12. **DropTable**:
- **Purpose**: Remove existing database tables from the system.

13. **EditTable**:
- **Purpose**: Modify the structure of database tables.
- **Dependencies**: Tabulator.js.

### **Module Management Tools**
14. **CreateModule**:
- **Purpose**: Automatically generate a Trongate module using a selected database table.

15. **DeleteModule**:
- **Purpose**: Remove existing modules from the system.

16. **ZipModuleOrProject**:
- **Purpose**: Create a zip archive of a module or the entire project for distribution.

17. **UnzipModule**:
- **Purpose**: Unpack a zipped module into the project.

### **Scripting and Query Tools**
18. **CreateSqlQueries**:
- **Purpose**: Build dynamic SQL queries for database interaction.
- **Dependencies**: Prism.js for query syntax highlighting.

19. **ExportScript**:
- **Purpose**: Export scripts for entire databases or specific tables.

### **Documentation Tools**
20. **DocumentDatabase**:
- **Purpose**: Generate documentation for database tables and relationships.

---

## 5. Naming Conventions and Standards

### **Code and File Naming**
- **CSS File**: `vtlsk.css`.
- **JavaScript File**: `vtlsk.js`.
- **Module Name**: `vtlsk`.

### **Coding Style**
- **CamelCase** for all naming (functions, variables, classes).
- Comments and docblocks for **PHP** classes and methods.
- Inline comments for **JavaScript** functions.

---

## 6. Task Tracking

### **Immediate Steps**
1. Create a new Trongate app, "Vtl Swiss Knife."
2. Add the `vtlsk` module structure and main files (`vtlsk.js` and `vtlsk.css`).
3. Bring in `vtlgen` as a reference module.
4. Begin integrating and refactoring tools:
    - Use modular design principles to separate individual tool logic.
    - Enhance frontend performance with TailwindCSS and JavaScript.

---

### **Session Notes**
- Please maintain completeness and keep this document as verbose as necessary for process continuity.