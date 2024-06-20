USE epiz_31121671_db1;

-- Drop existing table if it exists
DROP TABLE IF EXISTS herbs_products;

-- Create products table
CREATE TABLE herbs_products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    description TEXT NOT NULL,
    image VARCHAR(255) NOT NULL
);

-- Insert sample data
INSERT INTO herbs_products (name, price, description, image) VALUES
('Lavender Oil', 15.99, 'Pure lavender essential oil, perfect for relaxation and aromatherapy.', 'images/lavender_oil.jpeg');

INSERT INTO herbs_products (name, price, description, image) VALUES
('Rosemary Herb', 5.99, 'Fresh rosemary herb, ideal for cooking and medicinal purposes.', 'images/rosemary.jpg');

INSERT INTO herbs_products (name, price, description, image) VALUES
('Chamomile Tea', 8.99, 'Organic chamomile tea, great for calming and soothing.', 'images/chamomile_tea.avif');

INSERT INTO herbs_products (name, price, description, image) VALUES
('Peppermint Oil', 12.99, 'Refreshing peppermint essential oil, perfect for aromatherapy.', 'images/peppermint_oil.webp');

INSERT INTO herbs_products (name, price, description, image) VALUES
('Basil Leaves', 4.99, 'Dried basil leaves, perfect for adding flavor to your dishes.', 'images/basil.webp');
