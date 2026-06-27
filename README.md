# Job Portal

A full-stack job portal built with React and Vite, where recruiters can post and manage job listings and candidates can browse, save, and apply for jobs. Authentication is handled by Clerk, and data is stored in Supabase.

## Features

- 🔐 Authentication and role selection (candidate / recruiter) via Clerk
- 📝 Recruiters can post jobs, manage their listings, and review applications
- 🔍 Candidates can browse jobs with filters for location, company, and search
- 💾 Save jobs to revisit later
- 📄 Apply to jobs with a resume upload
- 🌒 Dark mode by default

## Tech Stack

- **Framework:** React 18 + [Vite](https://vitejs.dev/)
- **Routing:** React Router
- **Auth:** [Clerk](https://clerk.com/)
- **Database & Storage:** [Supabase](https://supabase.com/)
- **UI:** Tailwind CSS + [shadcn/ui](https://ui.shadcn.com/) (Radix primitives)
- **Forms & Validation:** React Hook Form + Zod
- **Deployment:** Vercel

## Getting Started

### Prerequisites

- Node.js 18+
- [pnpm](https://pnpm.io/)
- A [Supabase](https://supabase.com/) project
- A [Clerk](https://clerk.com/) application

### Installation

```bash
# Clone the repository
git clone https://github.com/muhammadusman586/jobportal.git
cd jobportal

# Install dependencies
pnpm install
```

### Environment Variables

Create a `.env` file in the project root (see `.env.example`):

```bash
VITE_SUPABASE_URL=your-supabase-url
VITE_SUPABASE_ANON_KEY=your-supabase-anon-key
VITE_CLERK_PUBLISHABLE_KEY=your-clerk-publishable-key
```

### Run

```bash
# Start the dev server
pnpm dev

# Build for production
pnpm build

# Preview the production build
pnpm preview

# Lint
pnpm lint
```

The app runs at `http://localhost:5173` by default.

## Project Structure

```
src/
├── api/         # Supabase data access (jobs, companies, applications)
├── components/  # Feature components and shadcn/ui primitives
├── data/        # Static seed data (FAQ, companies)
├── hooks/       # Reusable hooks (useFetch)
├── layouts/     # Shared app layout
├── pages/       # Route pages (landing, jobs, onboarding, etc.)
└── utils/       # Supabase client
```

