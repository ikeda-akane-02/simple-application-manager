CREATE TABLE applications (
    id INTEGER PRIMARY KEY,
    applicant_name TEXT NOT NULL,
    item_name TEXT NOT NULL,
    amount INTEGER NOT NULL,
    reason TEXT NOT NULL,
    status TEXT NOT NULL DEFAULT 'pending',
    created_at TEXT NOT NULL DEFAULT CURRENT_TIMESTAMP
);